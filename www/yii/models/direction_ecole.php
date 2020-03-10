<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direction_ecole".
 *
 * @property string $id_direction_ecole
 * @property int $qualite
 * @property string $id_personnel
 * @property string $date_debut
 * @property string $date_fin
 * @property string $id_annee_scolaire
 *
 * @property Personnel $personnel
 * @property AnneeScolaire $anneeScolaire
 */
class direction_ecole extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direction_ecole';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_direction_ecole', 'qualite', 'id_personnel', 'date_debut', 'date_fin', 'id_annee_scolaire'], 'required'],
            [['qualite'], 'integer'],
            [['date_debut', 'date_fin'], 'safe'],
            [['id_direction_ecole', 'id_personnel', 'id_annee_scolaire'], 'string', 'max' => 20],
            [['id_direction_ecole'], 'unique'],
            [['id_personnel'], 'exist', 'skipOnError' => true, 'targetClass' => Personnel::className(), 'targetAttribute' => ['id_personnel' => 'id_personnel']],
            [['id_annee_scolaire'], 'exist', 'skipOnError' => true, 'targetClass' => AnneeScolaire::className(), 'targetAttribute' => ['id_annee_scolaire' => 'annee_scolaire']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_direction_ecole' => 'Id Direction Ecole',
            'qualite' => 'Qualite',
            'id_personnel' => 'Id Personnel',
            'date_debut' => 'Date Debut',
            'date_fin' => 'Date Fin',
            'id_annee_scolaire' => 'Id Annee Scolaire',
        ];
    }

    /**
     * Gets query for [[Personnel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnel()
    {
        return $this->hasOne(Personnel::className(), ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[AnneeScolaire]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnneeScolaire()
    {
        return $this->hasOne(AnneeScolaire::className(), ['annee_scolaire' => 'id_annee_scolaire']);
    }
}
