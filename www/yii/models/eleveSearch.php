<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\eleve;

/**
 * eleveSearch represents the model behind the search form of `app\models\eleve`.
 */
class eleveSearch extends eleve
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_eleve', 'nom_eleve', 'prenom_eleve', 'date_naissance'], 'safe'],
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
        $query = eleve::find();

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
            'date_naissance' => $this->date_naissance,
        ]);

        $query->andFilterWhere(['like', 'id_eleve', $this->id_eleve])
            ->andFilterWhere(['like', 'nom_eleve', $this->nom_eleve])
            ->andFilterWhere(['like', 'prenom_eleve', $this->prenom_eleve]);

        return $dataProvider;
    }
}
