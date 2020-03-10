<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Valider;

/**
 * validerSearch represents the model behind the search form of `app\models\Valider`.
 */
class validerSearch extends Valider
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_eleve', 'id_com', 'id_personnel', 'date_valider', 'photo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Valider::find();

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
            'date_valider' => $this->date_valider,
        ]);

        $query->andFilterWhere(['like', 'Id_eleve', $this->Id_eleve])
            ->andFilterWhere(['like', 'id_com', $this->id_com])
            ->andFilterWhere(['like', 'id_personnel', $this->id_personnel])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
