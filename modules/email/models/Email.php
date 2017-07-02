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
            [['email'], 'unique', 'targetAttribute' => ['email']],
            ['email','checkEmails'],
        ];
    }
    public function checkEmails($emailspack) {
        $pack = $this->$emailspack;
        $arremail = explode(';', $pack);
        foreach ($arremail as $email) {
            if ( preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $email) != true ) {
                $this->addError('email', "It is not a valid email address.");
            } 
         }
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
        ];
    }
}
