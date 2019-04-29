<?php

use codexten\yii\web\widgets\Page;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model codexten\yii\modules\country\models\Country */

$this->title = $model->id;
?>

<?php $page = Page::begin([
    'title' => $this->title,
]) ?>

<?php $page->beginContent('content') ?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'code',
        'is_enabled',
    ],
]) ?>

<?php $page->endContent() ?>

<?php $page->end() ?>
