<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Entry Form';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>
    <h2>Вы ввели следующую информацию:</h2>
    
	<ul>
    	<li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    	<li><label>Email</label>: <?= Html::encode($model->email) ?></li>
	</ul>
</div>
