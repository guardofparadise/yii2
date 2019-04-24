<?php

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord {

	public function addToCart($product, $qty = 1) {
<<<<<<< HEAD
		if(isset($_SESSION['cart']['$product->id'])) {
			$_SESSION['cart'][$product->id]['qty'] += $qty;
		} else {
			$_SESSION['cart'][$product->id] = [
				'qty' => $qty,
				'name' => $product->name,
				'price' => $product->price,
				'img' => $product->img
			];
		}
		$_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ?
		$_SESSION['cart.qty'] + $qty : $qty;
		$_SESSION['cart.sum'] = isset($_SESSION['cart.sum']) ?
		$_SESSION['cart.sum'] + $qty * $product->price : $qty * $product->price;
	}
	
=======
		echo 'WOrker';
	}

>>>>>>> d3c3393ec6b5f5319c9b423b0e348bae2e66af21
}