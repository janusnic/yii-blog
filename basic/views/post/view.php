<?php
/**
 * Created by PhpStorm.
 */
//use common\models\Comment;
//use common\models\TagPost;
use yii\helpers\Html;

/* @var $model common\models\Post */
/* @var \frontend\models\CommentForm $commentForm \;
/* @var TagPost $post */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $model->title ?></h1>

<div class="meta">
    <p>Автор:  Дата публикации: <?= $model->publish_date ?> Категория: <?= Html::a($model->category->title, ['category/view', 'id' => $model->category->id]) ?></p>
</div>

<div>
    <?= $model->content ?>
</div>
