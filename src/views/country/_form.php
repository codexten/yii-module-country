<?php

use codexten\yii\modules\country\models\Country;
use kartik\select2\Select2;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use kartik\switchinput\SwitchInput;
use Symfony\Component\Intl\Countries;

/* @var $this yii\web\View */
/* @var $model Country */
?>

<div class="row">
    <div class="col-md-6">

        <?php $form = ActiveForm::begin() ?>

        <?= $this->render('form/_fields',compact(['model','form'])) ?>

        <div class="form-group">

            <?= Html::submitButton(
                $model->isNewRecord ? Yii::t('codexten:module:country', 'Create') : Yii::t('codexten:module:country',
                    'Update'),
                ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>

        <?php ActiveForm::end() ?>

    </div>
</div>
