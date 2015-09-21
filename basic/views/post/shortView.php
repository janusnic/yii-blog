<?php
// use common\models\TagPost;
use yii\helpers\Html;

/* @var $model common\models\Post */
/* @var TagPost $postTag */

$this->title = 'Посты';
$this->params['breadcrumbs'][] = $this->title;

?>
<h1><?= $model->title ?></h1>

<div class="meta">
    <p>Автор:  Дата публикации: <?= $model->publish_date ?> Категория: <?= Html::a($model->category->title, ['category/view', 'id' => $model->category->id]) ?></p>
</div>

<div class="content">
    <?= $model->anons ?>
</div>


<?= Html::a('Читать далее', ['post/view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
