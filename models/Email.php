<?php
namespace app\models;

use yii\base\Model;
use Yii;
class Email extends Model{
	
		public $email;
		
		
		public function rules(){
			return[
			[['email'],'required'],
			[['email'],'email'],
			
			
			];
			
		}
	public function save()
	{	
		$sql = "INSERT INTO email (id,email) VALUES(NULL,'{$this->email}')";
		
		return Yii::$app->db->createCommand($sql)->execute();
	}
}



?>
