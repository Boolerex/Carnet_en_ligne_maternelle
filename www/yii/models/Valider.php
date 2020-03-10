<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "valider".
 *
 * @property string $Id_eleve
 * @property string $id_com
 * @property string $id_personnel
 * @property string $date_valider
 * @property resource $photo
 *
 * @property Élève $eleve
 * @property Compétence $com
 * @property Personnel $personnel
 */
class Valider extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'valider';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_eleve', 'id_com', 'id_personnel', 'date_valider', 'photo'], 'required'],
            [['date_valider'], 'safe'],
            [['photo'], 'string'],
            [['Id_eleve', 'id_com', 'id_personnel'], 'string', 'max' => 20],
            [['Id_eleve', 'id_com', 'id_personnel'], 'unique', 'targetAttribute' => ['Id_eleve', 'id_com', 'id_personnel']],
            [['Id_eleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['Id_eleve' => 'id_eleve']],
            [['id_com'], 'exist', 'skipOnError' => true, 'targetClass' => Competence::className(), 'targetAttribute' => ['id_com' => 'id_com']],
            [['id_personnel'], 'exist', 'skipOnError' => true, 'targetClass' => Personnel::className(), 'targetAttribute' => ['id_personnel' => 'id_personnel']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_eleve' => 'Id Eleve',
            'id_com' => 'Id Com',
            'id_personnel' => 'Id Personnel',
            'date_valider' => 'Date Valider',
            'photo' => 'Photo',
        ];
    }

    /**
     * Gets query for [[Eleve]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEleve()
    {
        return $this->hasOne(Élève::className(), ['id_élève' => 'Id_eleve']);
    }

    /**
     * Gets query for [[Com]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCom()
    {
        return $this->hasOne(Compétence::className(), ['id_com' => 'id_com']);
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
}
