<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "annee_scolaire".
 *
 * @property string $annee_scolaire
 * @property string $debut
 * @property string $fin
 *
 * @property Classe[] $classes
 * @property DirectionEcole[] $directionEcoles
 * @property EtreEnPoste[] $etreEnPostes
 * @property Personnel[] $personnels
 */
class AnneeScolaire extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'annee_scolaire';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['annee_scolaire', 'debut', 'fin'], 'required'],
            [['annee_scolaire'], 'string', 'max' => 20],
            [['debut', 'fin'], 'string', 'max' => 10],
            [['annee_scolaire'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'annee_scolaire' => 'Annee Scolaire',
            'debut' => 'Debut',
            'fin' => 'Fin',
        ];
    }

    /**
     * Gets query for [[Classes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasses()
    {
        return $this->hasMany(Classe::className(), ['annee_scolaire' => 'annee_scolaire']);
    }

    /**
     * Gets query for [[DirectionEcoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectionEcoles()
    {
        return $this->hasMany(DirectionEcole::className(), ['id_annee_scolaire' => 'annee_scolaire']);
    }

    /**
     * Gets query for [[EtreEnPostes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEtreEnPostes()
    {
        return $this->hasMany(EtreEnPoste::className(), ['annee_scolaire' => 'annee_scolaire']);
    }

    /**
     * Gets query for [[Personnels]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnels()
    {
        return $this->hasMany(Personnel::className(), ['id_personnel' => 'id_personnel'])->viaTable('etre_en_poste', ['annee_scolaire' => 'annee_scolaire']);
    }
}
