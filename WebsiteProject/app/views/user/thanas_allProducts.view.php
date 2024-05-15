<?php

use Models\Product;
use Pages\AllProductsView;

$products = new AllProductsView(Product::getAllproducts());
$products->render($allProducts);
