<?php
/* @var $_api array */

use codexten\yii\modules\country\models\Country;
use yii\rest\ActiveController;

return [
    'modules' => [
        'api' => [
            'controllerMap' => [
                'country' => [
                    'class' => ActiveController::class,
                    'modelClass' => Country::class,
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
