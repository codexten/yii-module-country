<?php

use codexten\yii\base\Module;

return [
    'aliases' => [
        '@moduleCountry' => '@codexten/yii/modules/country',
    ],
    'modules' => [
        'country' => [
            'class' => Module::class,
            'controllerNamespace' => 'codexten\yii\modules\country\controllers',
        ],
    ],
];
