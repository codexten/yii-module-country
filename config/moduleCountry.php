<?php

use codexten\yii\base\Module;
use codexten\yii\modules\country\controllers\CountryController;
use codexten\yii\modules\country\models\Country;
use codexten\yii\modules\country\models\search\CountrySearch;

return [
    'modules' => [
        'country' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\country\controllers',
            'controllerMap' => [
                'country' => [
                    'class' => CountryController::class,
                    'modelClass' => Country::class,
                    'newSearchModel' => function () {
                        $className = 'codexten\yii\modules\country\models\search\CountrySearch';
                        $searchModel = new $className();

                        /* @var $searchModel CountrySearch */

                        return $searchModel;
                    },
                ],
            ],
        ],
    ],
];
