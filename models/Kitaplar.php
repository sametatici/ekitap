<?php

namespace backend\modules\ekitap\models;

use Yii;

/**
 * This is the model class for table "kitaplar".
 *
 * @property integer $id
 * @property string $kitap_ismi
 * @property string $aciklama
 * @property integer $fiyat
 */
class Kitaplar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kitaplar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kitap_ismi', 'aciklama', 'fiyat'], 'required'],
            [['fiyat'], 'integer'],
            [['kitap_ismi'], 'string', 'max' => 50],
            [['aciklama'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kitap_ismi' => 'Kitap Ismi',
            'aciklama' => 'Aciklama',
            'fiyat' => 'Fiyat',
        ];
    }
}
