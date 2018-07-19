<?php

namespace app\controllers;

use app\models\Email;
use app\models\Employee;
use Yii;
class ModController extends \yii\web\Controller
{	public $enableCsrfValidation = false;
	
	
    public function actionIndex(){
		
		$this->enableCsrfValidation = false;
		$model = new Email();
		$data  =Yii::$app->request->post();
		if(Yii::$app->request->isPost){
		$model->email = $data['email'];
			
		if($model->validate() && $model->save()){
			Yii::$app->session->setFlash('success','Subscribe complet');
		}
		
		}
	return $this->render('index',['model'=>$model]);
    }
    
    public function actionRegister()
    { 
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_REGISTER_EMPLOYEE;
		$data=Yii::$app->request->post();
		
		if(Yii::$app->request->isPost){
		$model->attributes = $data;
		if($model->validate() && $model->save())
		{
			Yii::$app->session->setFlash('success','Data Send');
		}			
		}
		return $this->render('register');
	}
	
	
	
	public function actionUpdate()
    {	
		$model = new Employee();
		$model->scenario = Employee::SCENARIO_UPDATE_EMPLOYEE;
		$data=Yii::$app->request->post();
		
		if(Yii::$app->request->isPost){
		$model->attributes = $data;
		if($model->validate() && $model->save())
		{
			Yii::$app->session->setFlash('success','Data Update');
		}			
		}
		return $this->render('update');
	}
	
	
	public function actionHelper(){
	$model = Employee::find(); 	
		
		return $this->render('helper',['model'=>$model]);
	}
		

}
