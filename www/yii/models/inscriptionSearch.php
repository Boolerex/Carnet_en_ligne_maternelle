<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\inscription;

/**
 * inscriptionSearch represents the model behind the search form of `app\models\inscription`.
 */
class inscriptionSearch extends inscription
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_inscription', 'id_eleve', 'id_classe', 'intitule_section', 'validite', 'date_operation'], 'safe'],
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
        $query = inscription::find();

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
            'date_operation' => $this->date_operation,
        ]);

        $query->andFilterWhere(['like', 'id_inscription', $this->id_inscription])
            ->andFilterWhere(['like', 'id_eleve', $this->id_eleve])
            ->andFilterWhere(['like', 'id_classe', $this->id_classe])
            ->andFilterWhere(['like', 'intitule_section', $this->intitule_section])
            ->andFilterWhere(['like', 'validite', $this->validite]);

        return $dataProvider;
    }
}
