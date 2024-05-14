<?php
use Controllers\AdminController;
use Controllers\UserController;
use Controllers\MainPagesController;
use Controllers\ProductController;

//********USER********* //
// HOME PAGE //
$mc = new MainPagesController();
$router->get('/', $mc, 'renderHomePage');

// ABOUT US PAGE //
$router->get('/aboutUs', $mc, 'renderAboutUsPage');

// ERROR PAGE //
$router->get('/error', $mc, 'renderErrorPage');

// SIGNUP PAGE //
$uc = new UserController();
$router->get('/signup', $uc, 'renderSignup');
$router->post('/signup', $uc, 'signUp');

// LOGIN PAGE //
$router->get('/login', $uc, 'renderLogin');
$router->post('/login', $uc, 'logIn');

// HELP-ADVICE PAGE //
$router->get('/helpAdvice', $uc, 'renderHelpAdvice');

// MY ACCOUNT PAGE //
$router->get('/myAccount',$uc,'renderMyAccount');

// ORDER HISTORY PAGE //
$router->get('/myOrders', $uc, 'renderMyOrders');

// CHECKOUT PAGE //
$router->get('/checkout', $uc, 'renderCheckout');

// WISHLIST PAGE //
$router->get('/wishlist', $uc, 'renderWishlist');

// SHOPPING CART PAGE //
$router->get('/shoppingCart', $uc, 'renderShoppingCart');

// ALL PRODUCTS PAGE //
$pc = new ProductController();
$router->get('/allProducts', $pc, 'renderAllProductsPage');

// PRODUCT DETAILS PAGE //
$router->get('/productDetails', $pc, 'renderProductDetails');

/********************************/
//********ADMIN********* //
$ac = new AdminController();

// ADMIN - CREATE PRODUCT //
$router->get('/createProduct', $ac, 'renderAddProductPage');

// ADMIN - EDIT PRODUCT //
$router->get('/editProduct', $ac, 'renderEditProductPage');

// ADMIN - DASHBOARD //
$router->get('/dashboard', $ac, 'renderDashboardAdminPage');

// ADMIN - ALL PRODUCTS //
$router->get('/allProductsAdmin', $ac, 'renderProductsAdminController');

// ADMIN - ALL ORDERS //
$router->get('/allOrdersAdmin', $ac, 'renderOrdersAdminController');

// ADMIN - ALL USERS //
$router->get('/allUsersAdmin', $ac, 'renderUsersAdminController');


