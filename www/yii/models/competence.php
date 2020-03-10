<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "competence".
 *
 * @property string $id_com
 * @property string $champ1
 * @property string $champ2
 * @property string $champ3
 * @property string $nom_competence
 * @property string $intitule_section
 *
 * @property Section $intituleSection
 * @property Valider[] $validers
 */
class competence extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'competence';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_com', 'champ1', 'champ2', 'champ3', 'nom_competence', 'intitule_section'], 'required'],
            [['nom_competence'], 'string'],
            [['id_com', 'intitule_section'], 'string', 'max' => 20],
            [['champ1', 'champ2', 'champ3'], 'string', 'max' => 13],
            [['id_com'], 'unique'],
            [['intitule_section'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['intitule_section' => 'intitule_section']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_com' => 'Id Com',
            'champ1' => 'Champ1',
            'champ2' => 'Champ2',
            'champ3' => 'Champ3',
            'nom_competence' => 'Nom Competence',
            'intitule_section' => 'Intitule Section',
        ];
    }

    /**
     * Gets query for [[IntituleSection]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIntituleSection()
    {
        return $this->hasOne(Section::className(), ['intitule_section' => 'intitule_section']);
    }

    /**
     * Gets query for [[Validers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValiders()
    {
        return $this->hasMany(Valider::className(), ['id_com' => 'id_com']);
    }
}
