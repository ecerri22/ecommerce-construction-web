<?php

namespace Core\Middleware;

class Auth {
    public function handle() {
        //if there is no info about the user logged in
        // = there is no login
        if (!$_SESSION['user'] ?? false) {
            //redirect to guest page
            header('location: /');
            exit();
        }

        if ($_SESSION['user']['role'] != 0) {
            header('location: /');
            exit();
        }
    }
}