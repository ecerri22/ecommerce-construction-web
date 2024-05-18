<?php

namespace Core;

class Container
{
  protected $bindings = [];

  public function bind($key, $resolve)
  {
    $this->bindings[$key] = $resolve;
  }

  public function resolve($key)
  {
    if (array_key_exists($key, $this->bindings)) {
      $resolve = $this->bindings[$key];
      return call_user_func($resolve);
    }
  }
}
