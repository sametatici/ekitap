<?php

namespace backend\modules\ekitap\models;

use Yii;

/**
 * This is the model class for table "kullanici".
 *
 * @property integer $id
 * @property string $kullanici_adi
 * @property string $sifre
 * @property string $kullanici_tipi
 */
class Kullanici extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kullanici';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kullanici_adi', 'sifre', 'kullanici_tipi'], 'required'],
            [['kullanici_adi', 'sifre', 'kullanici_tipi'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kullanici_adi' => 'Kullanici Adi',
            'sifre' => 'Sifre',
            'kullanici_tipi' => 'Kullanici Tipi',
        ];
    }
}
