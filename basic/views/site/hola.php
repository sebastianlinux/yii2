<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class HolaController extends Controller{

	public function actionIndex()
	{
		$variable = ["usuario"=>"sebastian", "clave"=>"4dm1n"];
		return $this->render->("hola",$variable);
	}

}