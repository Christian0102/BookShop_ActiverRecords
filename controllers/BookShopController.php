<?php

namespace app\controllers;
use Yii;
use app\models\Book;
use app\models\Publisher;

class BookShopController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
    public function actionIndex()
    {  
		$this->enableCsrfValidation = false;
		$conditions = ['publisher_id'=>1];
		//$bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();
		$bookList = Book::find()->orderBy('date_published')->limit(20)->all();
		
		



		
        return $this->render('index',['result'=>$bookList]);
    }

	public function actionCreate()
	{	
		
		$book = new Book();
		$publisher = Publisher::getList();
		if($book->load(Yii::$app->request->post()) && $book->save())
			{
				Yii::$app->session->setFlash('success','Data Saved!!');
				return $this->refresh();	
				
			}
		
		
		return $this->render('create',['book'=>$book,'publisher'=>$publisher]);
	}

}
