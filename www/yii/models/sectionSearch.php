<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\section;

/**
 * sectionSearch represents the model behind the search form of `app\models\section`.
 */
class sectionSearch extends section
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['intitule_section', 'description_section'], 'safe'],
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
        $query = section::find();

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
        $query->andFilterWhere(['like', 'intitule_section', $this->intitule_section])
            ->andFilterWhere(['like', 'description_section', $this->description_section]);

        return $dataProvider;
    }
}