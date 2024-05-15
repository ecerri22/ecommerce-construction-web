<?php

use Pages\AllProductsView;
use Models\Product;
$products = new AllProductsView(Product::getAllproducts());
$products->render();
