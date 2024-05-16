<?php

namespace Models;
use Core\App;

class User {
    protected $user = [];

    private $user_id;
    private $firstName;
    private $lastName;
    private $password;
    private $email;
    private $profileImg;
    private $role;
    private $db;
    
    public function __construct()
    {
        $this->db = App::container()->resolve('Core\Database');
    }

    public function getUserId(){
        return $this->user_id;
    }

    public function setUserId($user_id){
        $this->user_id = $user_id;
        return $this;
    }
    
    public function getFirstName(){
        return $this->firstName;
    }

    public function setFirstName($firstName){
        $this->firstName = $firstName;
        return $this;
    }
    
    public function getLastName(){
        return $this->lastName;
    }

    public function setLastName($lastName){
        $this->lastName = $lastName;
        return $this;
    }
    
    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password = $password;
        return $this;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
        return $this;
    }
    
    public function getProfileImage(){
        return $this->profileImg;
    }

    public function setProfileImage($profileImg){
        $this->profileImg = $profileImg;
        return $this;
    }
    
    public function getRole(){
        return $this->role;
    }

    public function setRole($role){
        $this->role = $role;
        return $this;
    }

    public function register($firstName, $lastName, $password, $email) {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setEmail($email);

        // Check if the email contains "admin" after the '@' sign
        $emailParts = explode('@', $email);
        if (isset($emailParts[1]) && strpos($emailParts[1], 'admin') !== false) {
            $this->setRole(1);
        } else {
            $this->setRole(0);
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->setPassword($hashedPassword);

        $createdAt = date('Y-m-d H:i:s');
        
        $sql = "INSERT INTO users (first_name, last_name, password, email, role, created_at) VALUES ('{$this->getFirstName()}', '{$this->getLastName()}', '{$this->getPassword()}', '{$this->getEmail()}', '{$this->getRole()}', '{$createdAt}')";
        $save = $this->db->query($sql);        
        
        return $save ? true : false;
    }
}
