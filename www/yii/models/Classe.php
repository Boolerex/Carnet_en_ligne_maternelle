<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classe".
 *
 * @property string $classe
 * @property string $description
 * @property string $ID-section
 *
 * @property Affectationenseignantclasse[] $affectationenseignantclasses
 * @property Enseignant[] $entifiantEnseignants
 * @property Section $-section
 * @property Eleve[] $eleves
 */
class Classe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'classe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['classe', 'description', 'IDsection'], 'required'],
            [['classe', 'ID-section'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['classe'], 'unique'],
            [['ID-section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['IDsection' => 'ID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'classe' => 'Classe',
            'description' => 'Description',
            'ID-section' => 'Id Section',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAffectationenseignantclasses()
    {
        return $this->hasMany(Affectationenseignantclasse::className(), ['classe' => 'classe']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEntifiantEnseignants()
    {
        return $this->hasMany(Enseignant::className(), ['Identifiant' => 'IdentifiantEnseignant'])->viaTable('affectationenseignantclasse', ['classe' => 'classe']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getsection()
    {
        return $this->hasOne(Section::className(), ['ID' => 'IDsection']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEleves()
    {
        return $this->hasMany(Eleve::className(), ['Classe' => 'classe']);
    }
}
