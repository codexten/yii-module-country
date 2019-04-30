<?php

use codexten\yii\modules\country\models\Country;
use codexten\yii\web\widgets\IndexPage;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel */

$this->title = Yii::t('codexten:module:country', 'Countries');
?>

<?php $page = IndexPage::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('main-actions') ?>

<?= $page->renderButton('create', 'create', ['class' => ['btn-success']]) ?>

<?php $page->endContent() ?>

<?php $page->beginContent('table') ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        [
            'attribute' => 'code',
            'label' => Yii::t('codexten:module:country', 'Code'),
        ],
        'name',
        [
            'attribute' => 'is_enabled',
            'value' => function ($model) {
                /* @var $model Country */

                return $model->is_enabled ? Yii::t('codexten:module:country',
                    'yes') : Yii::t('codexten:module:country', 'no');

            },
        ],
        [
            'class' => 'yii\grid\ActionColumn',
            'options' => ['style' => 'width: 5%'],
            'template' => '{update}',
        ],
    ],
]); ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
