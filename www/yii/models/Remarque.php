<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remarque".
 *
 * @property string $Remarque
 * @property string $IDCarnet
 * @property string $IntituleProgramme
 *
 * @property Programme $intituleProgramme
 * @property Carnetdesuivi $carnet
 */
class Remarque extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'remarque';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Remarque', 'IDCarnet', 'IntituleProgramme'], 'required'],
            [['Remarque'], 'string', 'max' => 200],
            [['IDCarnet', 'IntituleProgramme'], 'string', 'max' => 50],
            [['IntituleProgramme'], 'exist', 'skipOnError' => true, 'targetClass' => Programme::className(), 'targetAttribute' => ['IntituleProgramme' => 'Intitule']],
            [['IDCarnet'], 'exist', 'skipOnError' => true, 'targetClass' => Carnetdesuivi::className(), 'targetAttribute' => ['IDCarnet' => 'IdCarnet']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Remarque' => 'Remarque',
            'IDCarnet' => 'Idcarnet',
            'IntituleProgramme' => 'Intitule Programme',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntituleProgramme()
    {
        return $this->hasOne(Programme::className(), ['Intitule' => 'IntituleProgramme']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarnet()
    {
        return $this->hasOne(Carnetdesuivi::className(), ['IdCarnet' => 'IDCarnet']);
    }
}
