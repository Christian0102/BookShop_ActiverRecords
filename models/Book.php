<?php

namespace app\models;
use yii\db\ActiveRecord;
use Yii;


class Book extends ActiveRecord
{
	
	
	public function tablesName()
	{
	
	return '{{book}}';	
	}
		public function rules()
		{
			return [
			[['name','publisher_id'],'required']
				
			];
			
			
		}
	
	public function getDatePublished()
	{
		
	return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Not Set";	
	}
	
	public function getPublisher()
	{
	return $this->hasOne(Publisher::className(),['id'=>'publisher_id'])->one();
			
	}
		
		public function getPublisherName()
		{
		if($publisher)
			{
		
			echo $publisher->name;
			}	
			return "Not Set";
		} 
}





?>
