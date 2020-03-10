<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\direction_classe;

/**
 * direction_classeSearch represents the model behind the search form of `app\models\direction_classe`.
 */
class direction_classeSearch extends direction_classe
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_direction_classe', 'id_personnel', 'date_debut', 'date_fin', 'id_classe'], 'safe'],
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
        $query = direction_classe::find();

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

        $query->andFilterWhere(['like', 'id_direction_classe', $this->id_direction_classe])
            ->andFilterWhere(['like', 'id_personnel', $this->id_personnel])
            ->andFilterWhere(['like', 'id_classe', $this->id_classe]);

        return $dataProvider;
    }
}
