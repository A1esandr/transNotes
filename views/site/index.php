<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

//$this->title = 'Главная';
?>
<div class="site-index">
<h4><span class="h3">Блокнот трансерфера</span> - простое приложение для ведения ежедневных записей трансерфера</h4>
<p>
    <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
</p>    
</div>
