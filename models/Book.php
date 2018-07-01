<?php

namespace app\models;
use yii\db\ActiveRecord;


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
	
	
	
}





?>
