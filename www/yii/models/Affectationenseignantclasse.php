<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "affectationenseignantclasse".
 *
 * @property string $classe
 * @property string $IdentifiantEnseignant
 * @property string $AnneeScolaire
 *
 * @property Enseignant $entifiantEnseignant
 * @property Classe $classe0
 */
class Affectationenseignantclasse extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'affectationenseignantclasse';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classe', 'IdentifiantEnseignant', 'AnneeScolaire'], 'required'],
            [['classe', 'IdentifiantEnseignant'], 'string', 'max' => 50],
            [['AnneeScolaire'], 'string', 'max' => 10],
            [['classe', 'IdentifiantEnseignant'], 'unique', 'targetAttribute' => ['classe', 'IdentifiantEnseignant']],
            [['IdentifiantEnseignant'], 'exist', 'skipOnError' => true, 'targetClass' => Enseignant::className(), 'targetAttribute' => ['IdentifiantEnseignant' => 'Identifiant']],
            [['classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['classe' => 'classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classe' => 'Classe',
            'IdentifiantEnseignant' => 'Identifiant Enseignant',
            'AnneeScolaire' => 'Annee Scolaire',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntifiantEnseignant()
    {
        return $this->hasOne(Enseignant::className(), ['Identifiant' => 'IdentifiantEnseignant']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasse0()
    {
        return $this->hasOne(Classe::className(), ['classe' => 'classe']);
    }
}
