<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kulturist".
 *
 * @property integer $id
 * @property string $name
 * @property string $password
 * @property integer $age
 * @property integer $height
 * @property integer $weight
 */
class Kulturist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kulturist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'password', 'age', 'height', 'weight'], 'required'],
            [['age', 'height', 'weight'], 'integer'],
            [['name', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'age' => 'Age',
            'height' => 'Height',
            'weight' => 'Weight',
        ];
    }
}
