<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "enseignant".
 *
 * @property string $Identifiant
 * @property string $Nom
 * @property string $Prenom
 * @property int $TEL
 * @property string $Email
 * @property string $MotDePasse
 */
class Inscription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'enseignant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Identifiant', 'Nom', 'Prenom', 'TEL', 'Email', 'MotDePasse'], 'required'],
            [['Nom', 'Prenom'], 'string'],
            [['TEL'], 'integer'],
            [['Identifiant'], 'string', 'max' => 10],
            [['Email'], 'string', 'max' => 100],
            [['MotDePasse'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Identifiant' => 'Identifiant',
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
            'TEL' => 'Tel',
            'Email' => 'Email',
            'MotDePasse' => 'Mot De Passe',
        ];
    }
}
