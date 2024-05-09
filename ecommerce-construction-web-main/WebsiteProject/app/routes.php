<?php

use Controllers\UserController;
use Controllers\productController;
use Controllers\orderController;

$uc = new UserController();
$pc = new productController();
$oc = new orderController();



$router->get('/signup', $uc, 'renderSignup');
$router->post('/signup', $uc, 'signUp');

$router->get('/myAccount',$uc,'renderMyAccount');
$router->post('/myAccount', $uc, 'myAccount');

$router->get('/productDetails',$pc,'renderProductDetails');
$router->get('/productDetails',$pc,'productDetails');

$router->get('/myOrders',$oc,'renderMyOrders');
$router->get('/myOrders',$oc,'myOrders');



