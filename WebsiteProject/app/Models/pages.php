<?php

namespace Models;

use Core\App;

class Pages {
    private $db;

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }

    ////////////////////////////////////////HOMEPAGE/////////////////////////////////////
    
    public function getContentsHomePage(){
        $result = 'SELECT * FROM home_page_content';
        return $this->db->query($result)->get();
    }  

    public function updateContentsHomePage($contents) {
        foreach ($contents as $id => $content) {
            $query = "UPDATE home_page_content SET content = ? WHERE id = ?";
            $params = [$content, $id];
            $this->db->query($query, $params);
        }
    }

    /////////////////////////////////ABOUT US///////////////////////////////////////////////

    public function getContentsAboutUsPage() 
    {
        return $this->db->query('SELECT * FROM about_us_content')->get();
    }

    public function updateContentsAboutUsPage($contents) {
        foreach ($contents as $id => $content) {
            $query = "UPDATE about_us_content SET content = ? WHERE id = ?";
            $params = [$content, $id];
            $this->db->query($query, $params);
        }
    }

    ////////////////////////////////FOOTER//////////////////////////////////////////////////

    public function getContentsFooter(){
        $query = 'SELECT * FROM footer_content';
        return $this->db->query($query)->get();
    }   

    public function updateContentsFooter($contents) {
        $query = "UPDATE footer_content SET facebook = ?, twitter = ?, instagram = ? WHERE id = 1";
        $params = [$contents['facebook'], $contents['twitter'], $contents['instagram']];
        $this->db->query($query, $params);
    }

}

