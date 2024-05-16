<?php

namespace Core;
use Core\App;
use Core\Validator;

class Authenticator
{
  protected $user = [];
  protected $errors = [];

  public function validate($email, $password)
  {
    if (!Validator::email($email)) {
      $this->errors['email'] = 'Please provide a valid email';
    }

    if (!Validator::string($password, 5, 50)) {
      $this->errors['password'] = 'Please provide a valid password';
    }

    return empty($this->errors);
  }

  public function attempt($email, $password)
  {
    $this->user = App::container()->resolve('Core\Database')->query('SELECT * FROM users WHERE email = :email', ['email' => $email])->find();

    if ($this->user) {
      if (password_verify($password, $this->user['password'])) {
        $this->login(['email' => $email]);
        return true;
      } else {
        return false;
      }
    }
  }

  public function login($user)
  {
    $_SESSION['user'] = [
      'email' => $user['email'],
      'user_id' => $this->user['user_id'],
      'role' => $this->user['role'],
      'first_name' => $this->user['first_name'],
    ];

    session_regenerate_id(true);
  }

  public function errors()
  {
    return $this->errors;
  }

  
  public function error($key, $message)
  {
    //sets error
    $this->errors[$key] = $message;
  }

  public function userId()
  {
    return $_SESSION['user']['user_id'];
  }

  public function logout()
  {
    // //clear 
    // // $_SESSION = [];
    // Session::flush();

    // // delete session file in server
    // session_destroy();

    // // dlete cookies
    // $params = session_get_cookie_params();
    // setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain'], $params['secure'], $params['httponly']);

    Session::destroy();
  }

}
