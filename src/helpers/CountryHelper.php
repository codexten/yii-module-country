<?php

namespace codexten\yii\modules\country\helpers;

class CountryHelper
{
    public static function getNames()
    {
        $items = [];
        foreach (\codexten\yii\modules\country\models\Country::find()->all() as $model) {
            $items[$model->code] = $model->name;
        }

        return $items;
    }
}
