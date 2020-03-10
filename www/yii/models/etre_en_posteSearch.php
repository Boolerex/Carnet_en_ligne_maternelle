<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\etre_en_poste;

/**
 * etre_en_posteSearch represents the model behind the search form of `app\models\etre_en_poste`.
 */
class etre_en_posteSearch extends etre_en_poste
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personnel', 'annee_scolaire'], 'safe'],
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
        $query = etre_en_poste::find();

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
        ]);

        $query->andFilterWhere(['like', 'id_personnel', $this->id_personnel])
            ->andFilterWhere(['like', 'annee_scolaire', $this->annee_scolaire]);

        return $dataProvider;
    }
}
