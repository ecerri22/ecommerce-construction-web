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
$router->delete('/login', $uc, 'logOut')->only('auth');


// HELP-ADVICE PAGE //
$router->get('/helpAdvice', $uc, 'renderHelpAdvice');

// MY ACCOUNT PAGE //
$router->get('/myAccount',$uc,'renderMyAccount')->only('auth');

// ORDER HISTORY PAGE //
$router->get('/myOrders', $uc, 'renderMyOrders')->only('auth');

// CHECKOUT PAGE //
$router->get('/checkout', $uc, 'renderCheckout')->only('auth');

// WISHLIST PAGE //
$router->get('/wishlist', $uc, 'renderWishlist')->only('auth');

// SHOPPING CART PAGE //
$router->get('/shoppingCart', $uc, 'renderShoppingCart')->only('auth');

// ALL PRODUCTS PAGE //
$pc = new ProductController();
$router->get('/allProducts', $pc, 'renderAllProductsPage');

// PRODUCT DETAILS PAGE //
$router->get('/productDetails', $pc, 'renderProductDetails');

/********************************/
//********ADMIN********* //
$ac = new AdminController();

// ADMIN - CREATE PRODUCT //
$router->get('/createProduct', $ac, 'renderAddProductPage')->only('role');

// ADMIN - EDIT PRODUCT //
$router->get('/editProduct', $ac, 'renderEditProductPage')->only('role');

// ADMIN - DASHBOARD //
$router->get('/dashboard', $ac, 'renderDashboardAdminPage')->only('role');

// ADMIN - ALL PRODUCTS //
$router->get('/allProductsAdmin', $ac, 'renderProductsAdminController')->only('role');

// ADMIN - ALL ORDERS //
$router->get('/allOrdersAdmin', $ac, 'renderOrdersAdminController')->only('role');

// ADMIN - ALL USERS //
$router->get('/allUsersAdmin', $ac, 'renderUsersAdminController')->only('role');


