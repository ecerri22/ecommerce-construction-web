<?php

namespace Models;

use Core\App;

class Pages {
    private $db;

    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }
    
    public function updateContentsHomePage($contents) {
        foreach ($contents as $id => $content) {
            $query = "UPDATE home_page_content SET content = ? WHERE id = ?";
            $params = [$content, $id];
            $this->db->query($query, $params);
        }
    }

    public function getContentsHomePage(){
        $result = 'SELECT * FROM home_page_content';
        return $this->db->query($result)->get();
    }   

    public function updateContentsAboutUsPage($contents) {
        foreach ($contents as $id => $content) {
            $query = "UPDATE about_us_content SET content = ? WHERE id = ?";
            $params = [$content, $id];
            $this->db->query($query, $params);
        }
    }

    public function getContentsAboutUsPage(){
        $result = 'SELECT * FROM about_us_content';
        return $this->db->query($result)->get();
    }   

    public function updateContentsFooter($contents) {
        $query = "UPDATE footer_content SET facebook = ?, twitter = ?, instagram = ? WHERE id = 1";
        $params = [$contents['facebook'], $contents['twitter'], $contents['instagram']];
        $this->db->query($query, $params);
    }

    public function getContentsFooter(){
        $result = 'SELECT * FROM home_page_content';
        return $this->db->query($result)->get();
    }   
}

