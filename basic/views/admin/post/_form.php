<?php

use yii\helpers\Html;
use app\models\Post;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anons')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'category_id')->dropDownList(
        ArrayHelper::map($category, 'id', 'title')
    ) ?>

    <?= $form->field($model, 'author_id')->dropDownList(
        ArrayHelper::map($authors, 'id', 'username')
    ) ?>

    <?= $form->field($model, 'publish_status')->dropDownList(
        [Post::STATUS_DRAFT => 'Черновик', Post::STATUS_PUBLISH => 'Опубликован']
    ) ?>

    <?= $form->field($model, 'publish_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>