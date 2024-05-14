<?php

use Pages\LoginView;

$loginView = new LoginView("Log in", 'Daniela/danielaStyles.css');
$loginView->render($errors);

