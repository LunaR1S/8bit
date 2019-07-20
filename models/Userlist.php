<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $full_name
 * @property int $age
 * @property string $descriptions
 * @property string $email
 * @property string $password
 */
class Userlist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'age', 'descriptions', 'email', 'password'], 'required'],
            [['age'], 'integer'],
            [['descriptions'], 'string'],
            [['full_name'], 'string', 'max' => 255],
            [['email'],'email'],
        ];
    }

    /**
     * {@inheritdoc}
     */

}
