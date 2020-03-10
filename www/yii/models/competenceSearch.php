<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\competence;

/**
 * competenceSearch represents the model behind the search form of `app\models\competence`.
 */
class competenceSearch extends competence
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_com', 'champ1', 'champ2', 'champ3', 'nom_competence', 'intitule_section'], 'safe'],
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
        $query = competence::find();

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
        $query->andFilterWhere(['like', 'id_com', $this->id_com])
            ->andFilterWhere(['like', 'champ1', $this->champ1])
            ->andFilterWhere(['like', 'champ2', $this->champ2])
            ->andFilterWhere(['like', 'champ3', $this->champ3])
            ->andFilterWhere(['like', 'nom_competence', $this->nom_competence])
            ->andFilterWhere(['like', 'intitule_section', $this->intitule_section]);

        return $dataProvider;
    }
}
