<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eleve_avoir_parent".
 *
 * @property string $id_parent
 * @property string $id_eleve
 *
 * @property Parent $parent
 * @property Eleve $eleve
 */
class EleveAvoirParent extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eleve_avoir_parent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_parent', 'id_eleve'], 'required'],
            [['id_parent', 'id_eleve'], 'string', 'max' => 20],
            [['id_parent', 'id_eleve'], 'unique', 'targetAttribute' => ['id_parent', 'id_eleve']],
            [['id_parent'], 'exist', 'skipOnError' => true, 'targetClass' => Parent::className(), 'targetAttribute' => ['id_parent' => 'id_parent']],
            [['id_eleve'], 'exist', 'skipOnError' => true, 'targetClass' => Eleve::className(), 'targetAttribute' => ['id_eleve' => 'id_eleve']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_parent' => 'Id Parent',
            'id_eleve' => 'Id Eleve',
        ];
    }

    /**
     * Gets query for [[Parent]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Parent::className(), ['id_parent' => 'id_parent']);
    }

    /**
     * Gets query for [[Eleve]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEleve()
    {
        return $this->hasOne(Eleve::className(), ['id_eleve' => 'id_eleve']);
    }
}
