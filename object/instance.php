<?php

class Product {
  // private(クラス内), protected（クラス内・継承したクラス）, public(クラス内外)
  private $product = [];

  function __construct($product)
  {
    $this->product = $product;
  }

  public function getProduct()
  {
    echo $this->product;
  }

  public function addProduct($item)
  {
    $this->product .= $item;
  }

  // static でインスタン化せずに使用可能
  public static function getStaticProduct($str)
  {
    echo $str;
  }
}

$instance = new Product('テスト');

$instance->getProduct();
echo '<br>';

$instance->addProduct('追加分');
echo '<br>';

$instance->getProduct();
echo '<br>';

// static でインスタン化せずに使用可能
Product::getStaticProduct('静的');