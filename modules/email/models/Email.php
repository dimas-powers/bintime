<?php

namespace app\modules\email\models;

use Yii;

/**
 * This is the model class for table "email".
 *
 * @property integer $id
 * @property string $email
 */
class Email extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'string', 'max' => 150],
            ['email', 'email'],
            [ ['email'], 'unique', 'targetAttribute' => ['email']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            //'id' => 'ID',
            'email' => 'Email',
        ];
    }
}
