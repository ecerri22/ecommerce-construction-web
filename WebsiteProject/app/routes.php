<?php

use Controllers\AddProductAdminController;
use Controllers\UserController;
use Controllers\HomePageController;
use Controllers\OrdersAdminController;
use Controllers\ProductsAdminController;
use Controllers\UsersAdminController;
use Controllers\AdminDashboardController;
use Controllers\ProductsUserController;

// HOME PAGE //
$homepagecont = new HomePageController();
$router->get('/', $homepagecont, 'renderHomePage');


// SIGNUP PAGE //
$uc = new UserController();
$router->get('/signup', $uc, 'renderSignup');
$router->post('/signup', $uc, 'signUp');


// ADMIN - CREATE PRODUCT //
$adminAddProd = new AddProductAdminController();
$router->get('/createProduct', $adminAddProd, 'renderAddProductPage');

// ADMIN - ALL PRODUCTS //
$prAdC = new ProductsAdminController();
$router->get('/allProductsAdmin', $prAdC, 'renderProductsAdminController');

// ADMIN - ALL ORDERS //
$orAdC = new OrdersAdminController();
$router->get('/allOrdersAdmin', $orAdC, 'renderOrdersAdminController');

// ADMIN - ALL USERS //
$usAdC = new UsersAdminController();
$router->get('/allUsersAdmin', $usAdC, 'renderUsersAdminController');

// ADMIN - DASHBOARD //
$adminDashboard = new AdminDashboardController();
$router->get('/adminDashboard', $adminDashboard, 'renderAdminDashboard');

// USER - PRODUCTS //
$userProducts = new ProductsUserController();
$router->get('/allProductsUser', $userProducts, 'renderProductsUserController');
