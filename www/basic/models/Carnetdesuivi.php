<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carnetdesuivi".
 *
 * @property string $IdCarnet
 * @property string $Annee
 * @property int $IDEeleve
 *
 * @property Eleve $eeleve
 * @property Majcarnet[] $majcarnets
 * @property Remarque[] $remarques
 */
class Carnetdesuivi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'carnetdesuivi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IdCarnet', 'Annee', 'IDEeleve'], 'required'],
            [['Annee'], 'safe'],
            [['IDEeleve'], 'integer'],
            [['IdCarnet'], 'string', 'max' => 50],
            [['IdCarnet'], 'unique'],
            [['IDEeleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['IDEeleve' => 'IDE']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IdCarnet' => 'Id Carnet',
            'Annee' => 'Annee',
            'IDEeleve' => 'Ideeleve',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEeleve()
    {
        return $this->hasOne(Eleve::className(), ['IDE' => 'IDEeleve']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMajcarnets()
    {
        return $this->hasMany(Majcarnet::className(), ['IdCarnet' => 'IdCarnet']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemarques()
    {
        return $this->hasMany(Remarque::className(), ['IDCarnet' => 'IdCarnet']);
    }
}
