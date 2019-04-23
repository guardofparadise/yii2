<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;

class PostController extends Controller {

	public function actionShow() {
		$this->view->title = 'One post';

		$cats = Category::find()->all();

		return $this->render('show', compact('cats'));
	}

}
