<?php

namespace codexten\yii\modules\country\models;

use codexten\yii\db\ActiveRecord;
use codexten\yii\modules\country\models\query\CountryQuery;
use Symfony\Component\Intl\Countries;
use Yii;

/**
 * This is the model class for table "{{%country}}".
 *
 * Database fields:
 *
 * @property int $id
 * @property string $code
 * @property int $is_enabled
 *
 * @property string $name
 */
class Country extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%country}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_enabled'], 'integer'],
            [['code'], 'string', 'max' => 50],
            [['code'], 'required'],
            [['code'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('codexten:module:country', 'ID'),
            'code' => Yii::t('codexten:module:country', 'Code'),
            'is_enabled' => Yii::t('codexten:module:country', 'Is Enabled'),
        ];
    }

    /**
     * @return string
     */
    public function getName()
    {
        return Countries::getName($this->code);
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();
        $fields[] = 'name';

        return $fields;
    }

    /**
     * {@inheritdoc}
     * @return CountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountryQuery(get_called_class());
    }
}
