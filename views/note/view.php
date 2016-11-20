<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Note */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Записи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены что хотите удалить эту запись?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
            'label' => 'Дата',
            'attribute' => 'date',
            'format' => ['date', 'php:d.m.Y']
            ],
            [
            'label' => 'Намерения',
            'attribute' => 'content',
            ],
            [
            'label' => 'Процесс',
            'attribute' => 'process',
            ],
            /*'date',
            'content:ntext',
            'process:ntext',*/
        ],
    ]) ?>

</div>
