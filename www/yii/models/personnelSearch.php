<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\personnel;

/**
 * personnelSearch represents the model behind the search form of `app\models\personnel`.
 */
class personnelSearch extends personnel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personnel', 'nom_personnel', 'prenom_personnel', 'email_personnel'], 'safe'],
            [['telephone_personnel'], 'integer'],
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
        $query = personnel::find();

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
            'telephone_personnel' => $this->telephone_personnel,
        ]);

        $query->andFilterWhere(['like', 'id_personnel', $this->id_personnel])
            ->andFilterWhere(['like', 'nom_personnel', $this->nom_personnel])
            ->andFilterWhere(['like', 'prenom_personnel', $this->prenom_personnel])
            ->andFilterWhere(['like', 'email_personnel', $this->email_personnel]);

        return $dataProvider;
    }
}
