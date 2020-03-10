<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\classe;

/**
 * classeSearch represents the model behind the search form of `app\models\classe`.
 */
class classeSearch extends classe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_classe', 'nom_classe', 'description', 'salle', 'annee_scolaire'], 'safe'],
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
        $query = classe::find();

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
        $query->andFilterWhere(['like', 'id_classe', $this->id_classe])
            ->andFilterWhere(['like', 'nom_classe', $this->nom_classe])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'salle', $this->salle])
            ->andFilterWhere(['like', 'annee_scolaire', $this->annee_scolaire]);

        return $dataProvider;
    }
}
