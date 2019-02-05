<?php 
	namespace app\models;

	use yii\db\ActiveRecord;

	class Posts extends ActiveRecord
	{
		

		public $type;
	    public $company;
	    public $address;
	    public $mobile;
	    public $username;
	    public $email;
	    public $password;

		public function rules(){
			return[
				[['type','company','address','mobile', 'username', 'password'],'required']
			];
		}

	}
	

 ?>