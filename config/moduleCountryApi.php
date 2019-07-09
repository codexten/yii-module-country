<?php

use codexten\yii\modules\country\models\Country;
use codexten\yii\modules\country\models\search\CountrySearch;
use codexten\yii\rest\ActiveController;

return [
    'modules' => [
        'api' => [
            'controllerMap' => [
                'country' => [
                    'class' => ActiveController::class,
                    'modelClass' => Country::class,
                    'newSearchModel' => function () {
                        $className = '\codexten\yii\modules\country\models\search\CountrySearch';
                        $searchModel = new $className();

                        /* @var $searchModel CountrySearch */

                        return $searchModel;

                    },
                ],
            ],
        ],
    ],
    'components' => [
        'urlManager' => [
            'rules' => [
                'api' => [
                    'controller' => [
                        'api/country',
                    ],
                ],
            ],
        ],
    ],
];
