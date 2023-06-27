<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "theme".
 *
 * @property int $id
 * @property string $name
 * @property string $test
 * @property int $status
 * @property string $date
 * @property int $id_user
 */
class Theme extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'theme';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'name', 'test', 'id_user'], 'required'],
            [['id', 'status', 'id_user'], 'integer'],
            [['test'], 'string'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'test' => 'Test',
            'status' => 'Status',
            'date' => 'Date',
            'id_user' => 'Id User',
        ];
    }
}
