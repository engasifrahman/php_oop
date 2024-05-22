<?php

  $param  = 'John!';

  function sayHello()
  {
    $param = 'Michael!';
    $func  = function() use ($param)
    {
      echo 'Hi, I am ' . $param;
    };
    $func();
  }

  sayHello();
