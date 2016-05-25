<?php

namespace backend\modules\eKitap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ekitap\models\Kullanici;

/**
 * KullaniciSearch represents the model behind the search form about `backend\modules\ekitap\models\Kullanici`.
 */
class KullaniciSearch extends Kullanici
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kullanici_adi', 'sifre', 'kullanici_tipi'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Kullanici::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'kullanici_adi', $this->kullanici_adi])
            ->andFilterWhere(['like', 'sifre', $this->sifre])
            ->andFilterWhere(['like', 'kullanici_tipi', $this->kullanici_tipi]);

        return $dataProvider;
    }
}
