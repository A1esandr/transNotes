<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NoteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Записи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать запись', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
            'header' => 'Дата',
            'attribute' => 'date',
            'format' => ['date', 'php:d.m.Y']
            ],
            [
            'header' => 'Намерения',
            'attribute' => 'content',
            ],
            [
            'header' => 'Процесс',
            'attribute' => 'process',
            ],
            /*'content:ntext',
            'process:ntext',*/

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
