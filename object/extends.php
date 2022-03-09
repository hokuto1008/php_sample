<?php

// 親クラス（規定クラス、スーパークラスとも呼ばれる）
// finalを付けると継承不可になる
class BaseProduct {
  public function echoProduct(){
    echo '親クラスです';
  }

  // オーバーライドのテスト用
  // finalを付けると継承不可になる
  public function getProduct(){
    echo '親の関数です';
  }
}

// 子クラス（派生クラス、サブクラスとも呼ばれる）
class Product extends BaseProduct {
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    echo $this->product; // テスト

    // オーバーライドしているが、parent で親クラスのメソッドも使用可能
    echo parent::getProduct(); // 親の関数です
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }
}

$instance = new Product('テスト');