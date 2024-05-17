<?php

include_once 'Search.php';

use Pages\ProductsAdminView;

$path = __DIR__;
include_once str_replace("public\\Atea", "app\\Pages\\ProductsAdminView.php", $path);

$callable = [ProductsAdminView::class, 'showtable'];

search($callable);