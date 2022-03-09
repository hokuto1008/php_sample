<?php

// 抽象クラス 設定するメソッドを強制する
abstract class ProductAbstract {
  // 通常のメソッドも定義可能
  public function echoProduct(){
    echo '親クラスです';
  }

  // 強制するメソッド（中身は空にする）
  abstract public function getProduct();
}

class Product extends ProductAbstract {
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  // 強制されたメソッド
  public function getProduct()
  {
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }
}