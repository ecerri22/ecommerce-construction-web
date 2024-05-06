<?php

namespace Core;

class Controller {
    public function __construct()
    {
    }
    
    public function view($path, $data = []){
        extract($data);
        require base_path("app/views/" . $path);
    }
}