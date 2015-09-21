<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
$this->title = 'Entry Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php $form = ActiveForm::begin(); ?>
    	<?= $form->field($model, 'name') ?>
    	<?= $form->field($model, 'email') ?>
	    <div class="form-group">
	        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
	    </div>
	<?php ActiveForm::end(); ?>
</div>
