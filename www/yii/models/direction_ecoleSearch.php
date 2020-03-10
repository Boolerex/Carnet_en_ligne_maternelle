<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\direction_ecole;

/**
 * direction_ecoleSearch represents the model behind the search form of `app\models\direction_ecole`.
 */
class direction_ecoleSearch extends direction_ecole
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_direction_ecole', 'id_personnel', 'date_debut', 'date_fin', 'id_annee_scolaire'], 'safe'],
            [['qualite'], 'integer'],
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
        $query = direction_ecole::find();

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
            'qualite' => $this->qualite,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
        ]);

        $query->andFilterWhere(['like', 'id_direction_ecole', $this->id_direction_ecole])
            ->andFilterWhere(['like', 'id_personnel', $this->id_personnel])
            ->andFilterWhere(['like', 'id_annee_scolaire', $this->id_annee_scolaire]);

        return $dataProvider;
    }
}
