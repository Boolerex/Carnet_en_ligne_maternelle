<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programme".
 *
 * @property string $Intitule
 * @property string $Description
 * @property string $Intitulesousdomaine
 *
 * @property Sousdomaine $intitulesousdomaine
 * @property Remarque[] $remarques
 */
class Programme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'programme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Intitule', 'Description', 'Intitulesousdomaine'], 'required'],
            [['Intitule', 'Intitulesousdomaine'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 200],
            [['Intitule'], 'unique'],
            [['Intitulesousdomaine'], 'exist', 'skipOnError' => true, 'targetClass' => Sousdomaine::className(), 'targetAttribute' => ['Intitulesousdomaine' => 'Intitulé']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Intitule' => 'Intitule',
            'Description' => 'Description',
            'Intitulesousdomaine' => 'Intitulesousdomaine',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIntitulesousdomaine()
    {
        return $this->hasOne(Sousdomaine::className(), ['Intitulé' => 'Intitulesousdomaine']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemarques()
    {
        return $this->hasMany(Remarque::className(), ['IntituleProgramme' => 'Intitule']);
    }
}
