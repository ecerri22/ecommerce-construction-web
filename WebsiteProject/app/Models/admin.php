<?php

namespace Models;

use Core\App;

class Admin
{
    private $db;

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }
}
