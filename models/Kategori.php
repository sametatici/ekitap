<?php

namespace backend\modules\ekitap\models;

use Yii;

/**
 * This is the model class for table "kategori".
 *
 * @property integer $kategoriID
 * @property string $id
 * @property string $kategori_ismi
 * @property string $aciklama
 */
class Kategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kategori';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kategori_ismi', 'aciklama'], 'required'],
            [['id', 'kategori_ismi', 'aciklama'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kategoriID' => 'Kategori ID',
            'id' => 'ID',
            'kategori_ismi' => 'Kategori Ismi',
            'aciklama' => 'Aciklama',
        ];
    }
}
