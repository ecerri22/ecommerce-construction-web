<?php

namespace Core;

class Authenticator
{
  protected $user = [];

  public function attempt($email, $password)
  {
    $this->user = App::resolve(Database::class)->query('select * from users where email = :email', ['email' => $email])->find();

    if ($this->user) {
      if (password_verify($password, $this->user['password'])) {
        $this->login([
          'email' => $email
        ]);

        return true;
      }
    }
    return false;
  }

  public function login($user)
  {
    $_SESSION['user'] = [
      'email' => $user['email'],
      'id' => $this->user['id'],
      'role' => $this->user['role'],
      'name' => $this->user['name'],
      'image_name' => $this->user['image_name']
    ];

    session_regenerate_id(true);
  }

  public function logout()
  {
    Session::destroy();
  }

  public function userId()
  {
    return $_SESSION['user']['id'];
  }
}
