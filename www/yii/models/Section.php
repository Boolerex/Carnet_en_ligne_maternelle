<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property int $ID
 * @property string $Description
 */
class Section extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'Description'], 'required'],
            [['ID'], 'integer'],
            [['Description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Description' => 'Description',
        ];
    }
}
