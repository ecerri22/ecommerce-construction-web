<?php

include_once 'Search.php';

use Pages\UsersAdminView;

$path = __DIR__;
include_once str_replace("public\\Atea", "app\\Pages\\UsersAdminView.php", $path);

$callable = [UsersAdminView::class, 'showtable'];

search($callable);