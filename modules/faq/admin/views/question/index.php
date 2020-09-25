<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Вопросы';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать вопрос', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'category_id',
            [
                'attribute' => 'category_id', 
                'value' => function($data) {
                    return $data->category->title;
                }
            ],
            'title',
            'answer:ntext',
            ['attribute' => 'created_at', 'format' => ['date', 'php:d.m.Y H:i']],
            ['attribute' => 'updated_at', 'format' => ['date', 'php:d.m.Y H:i']],
            'flag',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
