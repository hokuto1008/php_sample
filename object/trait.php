<?php

trait ProductTrait {
  public function getProduct() {
    echo 'プロダクト';
  }
}

trait NewsTrait {
  public function getNews() {
    echo 'ニュース';
  }
}

class Product {
  // traitは複数使用できるため柔軟に使用可能
  use ProductTrait;
  use NewsTrait;

  public function getInformation() {
    echo 'クラスです';
  }

  // オーバーライド可能
  public function getNews() {
    echo 'クラスのニュースです';
  }
}

$product = new Product();

$product->getInformation();
echo '<br>';

$product->getProduct();
echo '<br>';

$product->getNews();
