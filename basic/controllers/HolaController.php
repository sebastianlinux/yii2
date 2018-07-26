<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;
class HolaController extends Controller{

	public function actionIndex()
	{
		$usuario = 'hola';
		//$usuario = User::findIdentity(101);
		$usuario = User::actionSql('');

		$variable = ["usuario"=>"sebastian", "clave"=>"4dm1n","user"=>$usuario];
		return $this->render('index',$variable);
	}

}