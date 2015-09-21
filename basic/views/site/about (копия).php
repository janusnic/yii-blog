<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'Hello';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-hello">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Hello page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
