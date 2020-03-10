<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "parent".
 *
 * @property string $id_parent
 * @property string $nom_parent
 * @property string $prenom_parent
 * @property string $email_parent
 * @property string $adresse_parent
 *
 * @property EleveAvoirParent[] $eleveAvoirParents
 * @property Eleve[] $eleves
 */
class classem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent', 'nom_parent', 'prenom_parent', 'email_parent', 'adresse_parent'], 'required'],
            [['nom_parent', 'prenom_parent'], 'string'],
            [['id_parent'], 'string', 'max' => 20],
            [['email_parent', 'adresse_parent'], 'string', 'max' => 50],
            [['id_parent'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_parent' => 'Id Parent',
            'nom_parent' => 'Nom Parent',
            'prenom_parent' => 'Prenom Parent',
            'email_parent' => 'Email Parent',
            'adresse_parent' => 'Adresse Parent',
        ];
    }

    /**
     * Gets query for [[EleveAvoirParents]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEleveAvoirParents()
    {
        return $this->hasMany(EleveAvoirParent::className(), ['id_parent' => 'id_parent']);
    }

    /**
     * Gets query for [[Eleves]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEleves()
    {
        return $this->hasMany(Eleve::className(), ['id_eleve' => 'id_eleve'])->viaTable('eleve_avoir_parent', ['id_parent' => 'id_parent']);
    }
}
