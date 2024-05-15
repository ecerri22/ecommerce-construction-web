<?php

namespace Core\Middleware;

class Role{
    public function handle() {
        if (!$_SESSION['user'] ?? false) {
            header('location: /');
            exit();
        }

        if ($_SESSION['user']['role'] != 1) {
            header('location: /');
            exit();
        }
    }
}