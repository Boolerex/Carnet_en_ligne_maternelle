<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eleve".
 *
 * @property int $IDE
 * @property string $Nom
 * @property string $Prenom
 * @property int $idParent
 * @property string $Classe
 *
 * @property Carnetdesuivi[] $carnetdesuivis
 * @property Parent $parent
 * @property Classe $classe
 * @property Image[] $images
 */
class Eleve extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eleve';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDE', 'Nom', 'Prenom', 'idParent', 'Classe'], 'required'],
            [['IDE', 'idParent'], 'integer'],
            [['Nom', 'Prenom', 'Classe'], 'string', 'max' => 50],
            [['IDE'], 'unique'],
            [['idParent'], 'exist', 'skipOnError' => true, 'targetClass' => Parent::className(), 'targetAttribute' => ['idParent' => 'idParent']],
            [['Classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['Classe' => 'classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDE' => 'Ide',
            'Nom' => 'Nom',
            'Prenom' => 'Prenom',
            'idParent' => 'Id Parent',
            'Classe' => 'Classe',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnetdesuivis()
    {
        return $this->hasMany(Carnetdesuivi::className(), ['IDE-eleve' => 'IDE']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Parent::className(), ['idParent' => 'idParent']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasse()
    {
        return $this->hasOne(Classe::className(), ['classe' => 'Classe']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::className(), ['IDE-eleve' => 'IDE']);
    }
}
