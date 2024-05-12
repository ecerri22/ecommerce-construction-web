<?php

use Controllers\UserController;

$uc = new UserController();

$router->get('/signup', $uc, 'renderSignup');
$router->post('/signup', $uc, 'signUp');


$router->get('/login', $uc, 'renderLogin');


$router->get('/helpAdvice', $uc, 'renderHelpAdvice');



