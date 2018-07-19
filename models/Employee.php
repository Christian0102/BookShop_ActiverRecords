<?php
namespace app\models;

use yii\base\Model;
use Yii;
class Employee extends Model
{
	const SCENARIO_REGISTER_EMPLOYEE = 'employee_register';
	const SCENARIO_UPDATE_EMPLOYEE = 'employee_update';
	
	public $firstName;
	public $lastName;
	public $age;
	public $funct;

		

	public function scenarios(){
		return[
			self::SCENARIO_REGISTER_EMPLOYEE=>['firstName','lastName','age','funct'],
			self::SCENARIO_UPDATE_EMPLOYEE=>['firstName','lastName','funct'],
		
		];
		}
		public function  rules(){
			return [
			[['firstName','lastName','age'],'required'],
			[['firstName','lastName'],'string','length'=>[4,24]],
			[['age'],'integer'],
			/*[['funct']'required','on'=>self::SCENARIO_UPDATE_EMPLOYEE],*/
			];
			}

	public function save(){
		
		return true;
	}
	
	
	public  static function find()
	{
		
		$sql = "SELECT * FROM book";
		
		return Yii::$app->db->createCommand($sql)->queryAll();	
	
	}
}






?>
