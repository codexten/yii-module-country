<?php

use codexten\yii\modules\country\models\Country;
use kartik\select2\Select2;
use Symfony\Component\Intl\Regions;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use kartik\switchinput\SwitchInput;

/* @var $this yii\web\View */
/* @var $model Country */
?>

<div class="row">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>

        <?= $form->field($model, 'code')
            ->widget(Select2::class, [
                'data' => Regions::getNames(),
                'language' => 'de',
                'options' => ['placeholder' => Yii::t('codexten:module:locale', 'Select Country')],
                'disabled' => !$model->isNewRecord,
                'pluginOptions' => [
                    'allowClear' => true,
                ],
            ]); ?>

        <?= $form->field($model, 'is_enabled')->widget(SwitchInput::class, []) ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:country', 'Create') : Yii::t('codexten:module:country',
                    'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>