<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sousdomaine".
 *
 * @property string $Intitulé
 * @property string $description
 * @property string $IntituleDomaine
 *
 * @property Programme[] $programmes
 * @property Domaine $intituleDomaine
 */
class Sousdomaine extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sousdomaine';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Intitulé', 'description', 'IntituleDomaine'], 'required'],
            [['Intitulé', 'IntituleDomaine'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['Intitulé'], 'unique'],
            [['IntituleDomaine'], 'exist', 'skipOnError' => true, 'targetClass' => Domaine::className(), 'targetAttribute' => ['IntituleDomaine' => 'Intitulé']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Intitulé' => 'Intitul�',
            'description' => 'Description',
            'IntituleDomaine' => 'Intitule Domaine',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgrammes()
    {
        return $this->hasMany(Programme::className(), ['Intitulesousdomaine' => 'Intitulé']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntituleDomaine()
    {
        return $this->hasOne(Domaine::className(), ['Intitulé' => 'IntituleDomaine']);
    }
}
