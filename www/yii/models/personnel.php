<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personnel".
 *
 * @property string $id_personnel
 * @property string $nom_personnel
 * @property string $prenom_personnel
 * @property string $email_personnel
 * @property int $telephone_personnel
 *
 * @property DirectionClasse[] $directionClasses
 * @property DirectionEcole[] $directionEcoles
 * @property EtreEnPoste[] $etreEnPostes
 * @property AnneeScolaire[] $anneeScolaires
 * @property Valider[] $validers
 */
class personnel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'personnel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_personnel', 'nom_personnel', 'prenom_personnel', 'email_personnel', 'telephone_personnel'], 'required'],
            [['nom_personnel', 'prenom_personnel'], 'string'],
            [['telephone_personnel'], 'integer'],
            [['id_personnel', 'email_personnel'], 'string', 'max' => 20],
            [['id_personnel'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_personnel' => 'Id Personnel',
            'nom_personnel' => 'Nom Personnel',
            'prenom_personnel' => 'Prenom Personnel',
            'email_personnel' => 'Email Personnel',
            'telephone_personnel' => 'Telephone Personnel',
        ];
    }

    /**
     * Gets query for [[DirectionClasses]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectionClasses()
    {
        return $this->hasMany(DirectionClasse::className(), ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[DirectionEcoles]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirectionEcoles()
    {
        return $this->hasMany(DirectionEcole::className(), ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[EtreEnPostes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEtreEnPostes()
    {
        return $this->hasMany(EtreEnPoste::className(), ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[AnneeScolaires]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAnneeScolaires()
    {
        return $this->hasMany(AnneeScolaire::className(), ['annee_scolaire' => 'annee_scolaire'])->viaTable('etre_en_poste', ['id_personnel' => 'id_personnel']);
    }

    /**
     * Gets query for [[Validers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getValiders()
    {
        return $this->hasMany(Valider::className(), ['id_personnel' => 'id_personnel']);
    }
}
