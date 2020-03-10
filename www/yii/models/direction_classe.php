<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "direction_classe".
 *
 * @property string $id_direction_classe
 * @property int $qualite
 * @property string $id_personnel
 * @property string $date_debut
 * @property string $date_fin
 * @property string $id_classe
 *
 * @property Personnel $personnel
 * @property Classe $classe
 */
class direction_classe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'direction_classe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_direction_classe', 'qualite', 'id_personnel', 'date_debut', 'date_fin', 'id_classe'], 'required'],
            [['qualite'], 'integer'],
            [['date_debut', 'date_fin'], 'safe'],
            [['id_direction_classe', 'id_personnel', 'id_classe'], 'string', 'max' => 20],
            [['id_direction_classe'], 'unique'],
            [['id_personnel'], 'exist', 'skipOnError' => true, 'targetClass' => Personnel::className(), 'targetAttribute' => ['id_personnel' => 'id_personnel']],
            [['id_classe'], 'exist', 'skipOnError' => true, 'targetClass' => Classe::className(), 'targetAttribute' => ['id_classe' => 'id_classe']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_direction_classe' => 'Id Direction Classe',
            'qualite' => 'Qualite',
            'id_personnel' => 'Id Personnel',
            'date_debut' => 'Date Debut',
            'date_fin' => 'Date Fin',
            'id_classe' => 'Id Classe',
        ];
    }

    /**
     * Gets query for [[Personnel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonnel()
    {
        return $this->hasOne(Personnel::className(), ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[Classe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getClasse()
    {
        return $this->hasOne(Classe::className(), ['id_classe' => 'id_classe']);
    }
}
