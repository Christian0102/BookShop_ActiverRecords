<?php

namespace app\controllers;
use Yii;
use app\models\Author;
class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
       {
			
		$model = new Author();
		if ($model->load(Yii::$app->request->post()) &&$model->save())
		{
			Yii::$app->session->setFlash('success','Author added');
			return $this->redirect(['author/index']);
		}
        return $this->render('create',['model'=>$model]);
    }

    public function actionDelete()
    {
        return $this->render('delete');
    }

    public function actionIndex()
    {	
		$authorsList = Author::find()->all();
		
		
        return $this->render('index',['authorsList'=>$authorsList,]);
    }

    public function actionUpdate()
    {
        return $this->render('update');
    }

}
