<?php

namespace codexten\yii\modules\country\helpers;

class CountryHelper
{
    public static function getNames()
    {
        $items = [];
        foreach (self::getCountries() as $model) {
            $items[$model->code] = $model->name;
        }

        return $items;
    }

    public static function getCountries()
    {
        return \codexten\yii\modules\country\models\Country::find()->all();
    }

    public static function getNamesById()
    {
        $items = [];
        foreach (self::getCountries() as $model) {
            $items[$model->id] = $model->name;
        }

        return $items;
    }
}
