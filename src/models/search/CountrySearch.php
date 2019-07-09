<?php

namespace codexten\yii\modules\country\models\search;

use codexten\yii\db\SearchModelInterface;
use codexten\yii\db\SearchModelTrait;
use codexten\yii\modules\country\models\Country;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CountrySearch extends Model implements SearchModelInterface
{
    use SearchModelTrait;

    public $q;

    public function search(array $params)
    {
        $query = Country::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => $this->sort,
        ]);


        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        return $dataProvider;
    }
}
