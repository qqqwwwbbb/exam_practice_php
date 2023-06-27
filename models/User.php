<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property string $surname
 * @property string $password
 * @property int $role
 */
class User extends \yii\db\ActiveRecord
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
            [['email', 'name', 'surname', 'password'], 'required'],
            [['role'], 'integer'],
            [['email', 'name', 'surname', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'name' => 'Name',
            'surname' => 'Surname',
            'password' => 'Password',
            'role' => 'Role',
        ];
    }

    public function isAdmin()
    {
        return $this->role === 1;
    }

    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
