<?php
namespace app\controllers;
use Yii;
use yii\web\Constroller;
use yii\filters\AccessControl;
use yii\web\Controller;

	


class TestController extends Controller
{
	
public function actionHome()
	{
		return $this->render('home');
	}	
}
	







?>
