<?php

use codexten\yii\base\Module;
use codexten\yii\modules\country\controllers\CountryController;

return [
    'modules' => [
        'country' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\country\controllers',
            'controllerMap' => [
                'country' => [
                    'class' => CountryController::class,
                ],
            ],
        ],
    ],
];
