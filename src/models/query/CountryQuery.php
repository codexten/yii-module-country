<?php

namespace codexten\yii\modules\country\models\query;

/**
 * This is the ActiveQuery class for [[\codexten\yii\modules\country\models\Country]].
 *
 * @see \codexten\yii\modules\country\models\Country
 */
class CountryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\country\models\Country[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return \codexten\yii\modules\country\models\Country|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
