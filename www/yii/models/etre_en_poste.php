<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etre_en_poste".
 *
 * @property string $id_personnel
 * @property string $annee_scolaire
 * @property int $qualite
 *
 * @property AnneeScolaire $anneeScolaire
 * @property Personnel $personnel
 */
class etre_en_poste extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etre_en_poste';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personnel', 'annee_scolaire', 'qualite'], 'required'],
            [['qualite'], 'integer'],
            [['id_personnel', 'annee_scolaire'], 'string', 'max' => 20],
            [['id_personnel', 'annee_scolaire'], 'unique', 'targetAttribute' => ['id_personnel', 'annee_scolaire']],
            [['annee_scolaire'], 'exist', 'skipOnError' => true, 'targetClass' => AnneeScolaire::className(), 'targetAttribute' => ['annee_scolaire' => 'annee_scolaire']],
            [['id_personnel'], 'exist', 'skipOnError' => true, 'targetClass' => Personnel::className(), 'targetAttribute' => ['id_personnel' => 'id_personnel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personnel' => 'Id Personnel',
            'annee_scolaire' => 'Annee Scolaire',
            'qualite' => 'Qualite',
        ];
    }

    /**
     * Gets query for [[AnneeScolaire]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnneeScolaire()
    {
        return $this->hasOne(AnneeScolaire::className(), ['annee_scolaire' => 'annee_scolaire']);
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
}
