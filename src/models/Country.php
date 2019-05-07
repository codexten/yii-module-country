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
    //const STATUS_ACTIVE = 1;
    //const STATUS_INACTIVE = 0;

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
     *{@inheritdoc}
     */
    public function canUpdate()
    {
        //if (!Yii::$app->user->can('partner.update')) {
        //    return false;
        //}

        return parent::canUpdate();
    }

    /**
     *{@inheritdoc}
     */
    public function canView()
    {
        //if (!Yii::$app->user->can('partner.view')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     *{@inheritdoc}
     */
    public function canDelete()
    {
        //if (!Yii::$app->user->can('partner.delete')) {
        //    return false;
        //}

        return parent::canView();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $meta = parent::getMeta();

        //if ($this->canView()) {
        //    $meta['viewUrl'] = Url::to(['@partner/view', 'id' => $this->id]);
        //}
        //if ($this->canUpdate()) {
        //    $meta['updateUrl'] = Url::to(['@partner/update', 'id' => $this->id]);
        //}

        return $meta;
    }

    /**
     * {@inheritdoc}
     */
    public function fields()
    {
        $fields = parent::fields();

        return $fields;
    }

    /**
     * {@inheritdoc}
     */
    public function extraFields()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     * @return CountryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CountryQuery(get_called_class());
    }

    ///**
    //* statuses
    //* @return array
    //*/
    //public static function statuses()
    //{
    //    return [
    //        self::STATUS_ACTIVE => Yii::t('app', 'Active'),
    //        self::STATUS_INACTIVE => Yii::t('app', 'Inactive'),
    //    ];
    //}
}
