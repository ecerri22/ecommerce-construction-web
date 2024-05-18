<?php
use Pages\ShoppingCartView;

$shoppingCart=new ShoppingCartView('Shopping Cart', 'Rosela/roselaStyles.css');
$shoppingCart->render($allShoppingCartProducts);
