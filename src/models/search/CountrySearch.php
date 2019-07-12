<?php

namespace codexten\yii\modules\country\models\search;

use codexten\yii\db\SearchModelInterface;
use codexten\yii\db\SearchModelTrait;
use codexten\yii\modules\country\models\Country;
use Symfony\Component\Intl\Countries;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CountrySearch extends Model implements SearchModelInterface
{
    use SearchModelTrait;

    public $code;
    public $name;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [
                [
                    'code',
                    'name',
                ],
                'safe',
            ],
        ];
    }

    public function search(array $params)
    {
        $query = Country::find();

        $q = \Yii::$app->request->get('q');
        $countryCodes = [];

        if (!empty($q)) {
            $q = strtolower($q);
            foreach (Countries::getNames() as $code => $name) {
                $name = strtolower($name);
                if (strpos($name, $q) !== false) {
                    $countryCodes[] = $code;
                }
            }
        }

        if (!empty($countryCodes)) {
            $query->andWhere(['code' => $countryCodes]);
        }


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => $this->sort,
        ]);


        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $query->andFilterWhere(['like', 'code', $this->code]);

        //$query->andFilterWhere(['like', , $this->name]);

        return $dataProvider;
    }
}
