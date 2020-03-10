<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\classem;

/**
 * parentSearch represents the model behind the search form of `app\models\classem`.
 */
class parentSearch extends classem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent', 'nom_parent', 'prenom_parent', 'email_parent', 'adresse_parent'], 'safe'],
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
        $query = classem::find();

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
        $query->andFilterWhere(['like', 'id_parent', $this->id_parent])
            ->andFilterWhere(['like', 'nom_parent', $this->nom_parent])
            ->andFilterWhere(['like', 'prenom_parent', $this->prenom_parent])
            ->andFilterWhere(['like', 'email_parent', $this->email_parent])
            ->andFilterWhere(['like', 'adresse_parent', $this->adresse_parent]);

        return $dataProvider;
    }
}
