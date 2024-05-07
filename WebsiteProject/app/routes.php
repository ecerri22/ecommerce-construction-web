<?php

use Controllers\UserController;

$uc = new UserController();

$router->get('/signup', $uc, 'renderSignup');
$router->post('/signup', $uc, 'signUp');


