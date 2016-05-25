<?php

namespace backend\modules\ekitap\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\ekitap\models\Kitaplar;

/**
 * KitaplarSearch represents the model behind the search form about `backend\modules\ekitap\models\Kitaplar`.
 */
class KitaplarSearch extends Kitaplar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'fiyat'], 'integer'],
            [['kitap_ismi', 'aciklama'], 'safe'],
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
        $query = Kitaplar::find();

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
            'fiyat' => $this->fiyat,
        ]);

        $query->andFilterWhere(['like', 'kitap_ismi', $this->kitap_ismi])
            ->andFilterWhere(['like', 'aciklama', $this->aciklama]);

        return $dataProvider;
    }
}
