<?php

namespace app\controllers;
use Yii;
use app\models\Book;


class BookShopController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {  
		$this->enableCsrfValidation = false;
		 $model = new Book();
		$model->name = 'TEst book';
		$model->isbn = '3535353';
		$model->save();
		echo '<pre>';
		print_r($model->getErrors());	
		echo '</pre>';	
		
        return $this->render('index');
    }

	public function actionCreate()
	{
		$book = new Book();
		return $this->render('create',['book'=>$book]);
	}

}
