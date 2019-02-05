<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    
    public $type;
    public $company;
    public $address;
    public $mobile;
    public $username;
    public $email;
    public $password;
    public $repeat_password;



    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['type', 'required'],
            ['company', 'required'],
            ['address', 'required'],
            ['mobile', 'required'],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],

            ['repeat_password', 'required'],
            ['repeat_password', 'compare', 'compareAttribute'=>'password', 'message'=>"Passwords don't match" ],  


        ];
    }



    
    public function beforeSave()
    {
        // in this case, we will use the old hashed password.
        if(empty($this->password) && empty($this->repeat_password) && !empty($this->initialPassword))
            $this->password=$this->repeat_password=$this->initialPassword;

        return parent::beforeSave();
    }

    public function afterFind()
    {
        //reset the password to null because we don't want the hash to be shown.
        $this->initialPassword = $this->password;
        $this->password = null;
        
        parent::afterFind();
    }

    public function saveModel($data=array())
    {
            //because the hashes needs to match
            if(!empty($data['password']) && !empty($data['repeat_password']))
            {
                $data['password'] = Yii::app()->user->hashPassword($data['password']);
                $data['repeat_password'] = Yii::app()->user->hashPassword($data['repeat_password']);
            }

            $this->attributes=$data;
            
            if(!$this->save())
                return CHtml::errorSummary($this);

         return true;
    }
    

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->type = $this->type;
        $user->company = $this->company;
        $user->address = $this->address;
        $user->mobile = $this->mobile;
        // $user-> = $this->;
        // $user-> = $this->;
        // $user-> = $this->;
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);

        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
}
