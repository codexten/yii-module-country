<?php

use codexten\yii\modules\country\models\Country;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model Country */
?>

<div class="row">
    <div class="col-md-6">

    <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'code') ?>

        <?= $form->field($model, 'is_enabled') ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:country', 'Create') : Yii::t('codexten:module:country', 'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>