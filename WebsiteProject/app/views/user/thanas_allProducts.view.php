<?php

use Pages\AllProductsView;

$products = new AllProductsView('All Products', 'Thanas/thanasStyles.css');
$products->render($allProducts);
