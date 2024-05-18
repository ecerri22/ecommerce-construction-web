<?php

include_once '../Atea/Search.php';

use Pages\OrdersAdminView;

$path = __DIR__;
include_once str_replace("public\\Daniela", "app\\Pages\\OrdersAdminView.php", $path);

$callable = [OrdersAdminView::class, 'showtable'];

search($callable);