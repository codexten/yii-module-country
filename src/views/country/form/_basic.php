<?php

use kartik\select2\Select2;
use kartik\switchinput\SwitchInput;
use Symfony\Component\Intl\Countries;

?>

<?= $form->field($model, 'code')
    ->widget(Select2::class, [
        'data' => Countries::getNames(),
        'language' => 'de',
        'options' => ['placeholder' => Yii::t('codexten:module:locale', 'Select Country')],
        'disabled' => !$model->isNewRecord,
        'pluginOptions' => [
            'allowClear' => true,
        ],
    ]); ?>

<?= $form->field($model, 'is_enabled')->widget(SwitchInput::class, []) ?>
