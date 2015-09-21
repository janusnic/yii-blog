<?php

namespace app\models;
use yii\data\ActiveDataProvider;
use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $title
 * @property string $anons
 * @property string $content
 * @property integer $category_id
 * @property integer $author_id
 * @property string $publish_status
 * @property string $publish_date
 *
 * @property Category $category
 * @property User $author
 */
class Post extends \yii\db\ActiveRecord
{ 

    /**
     * Статус поста: опубликованн.
     */
    const STATUS_PUBLISH = 'publish';
    /**
     * Статус поста: черновие.
     */
    const STATUS_DRAFT = 'draft';

      /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

        public function rules()
    {
        return [
            [['title', 'anons', 'content'], 'required'],
            [['anons', 'content', 'publish_status'], 'string'],
            [['category_id', 'author_id'], 'integer'],
            [['publish_date'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'anons' => 'Anons',
            'content' => 'Content',
            'category_id' => 'Category ID',
            'author_id' => 'Author ID',
            'publish_status' => 'Publish Status',
            'publish_date' => 'Publish Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * Возвращает опубликованные посты
     * @return ActiveDataProvider
     */
    public function getPublishedPosts()
    {
        return new ActiveDataProvider([
            'query' => Post::find()
                ->where(['publish_status' => self::STATUS_PUBLISH])
                ->orderBy(['publish_date' => SORT_DESC])
        ]);
    }

      /**
     * Возвращает модель поста.
     * @param int $id
     * @throws NotFoundHttpException в случае, когда пост не найден или не опубликован
     * @return Post
     */
    public function getPost($id)
    {
        if (
            ($model = Post::findOne($id)) !== null &&
            $model->isPublished()
        ) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested post does not exist.');
        }
    }

      /**
     * Опубликован ли пост.
     * @return bool
     */
    protected function isPublished()
    {
        return $this->publish_status === self::STATUS_PUBLISH;
    }

}
