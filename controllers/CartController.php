<?php

namespace app\controllers;
use app\models\Product;
use app\models\Cart;
use Yii;

class CartController extends AppController {
<<<<<<< HEAD

=======
>>>>>>> d3c3393ec6b5f5319c9b423b0e348bae2e66af21
	public function actionAdd() {
		$id = Yii::$app->request->get('id');
		$product = Product::findOne($id);
		if(empty($product)) return false;
		$session = Yii::$app->session;
		$session->open();
<<<<<<< HEAD
		$cart = new Cart();
		$cart->addToCart($product);
	  $this->layout = false;
		return $this->render('cart-modal', compact('session'));
	}

	public function actionClear() {
		$session = Yii::$app->session;
		$session->open();
		$session->remove('cart');
		$session->remove('cart.qty');
		$session->remove('cart.sum');
		$this->layout = false;
		return $this->render('cart-modal', compact('session'));
	}

=======

		$cart = new Cart();
		$cart->addToCart($product);
	}
>>>>>>> d3c3393ec6b5f5319c9b423b0e348bae2e66af21
}