<?php

namespace Core\Middleware;

class Guest{  
    public function handle() {
        //check if there is info abt user logged in
        if ($_SESSION['user'] ?? false) {
            //redirect to home page 
            header('location: /');
            //prevents any further code to be executed
            exit();
        }
    }
}