<?php

use Pages\MyOrdersView;

$myOrdersView = new MyOrdersView("My Order History", 'Irvi/irviStyles.css');
$myOrdersView->render();