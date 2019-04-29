<?php

namespace codexten\yii\modules\country\controllers;

use codexten\yii\modules\country\models\Country;
use codexten\yii\web\CrudController;
use yii\helpers\ArrayHelper;

/**
 * CountryController implements the CRUD actions for Country model.
 */
class CountryController extends CrudController
{
    public $modelClass = Country::class;

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        $actions = parent::actions();
        ArrayHelper::remove($actions, 'delete');

        return $actions;
    }

}
