<?php
session_unset();

if (ini_get('session.use_cookies')) {
  $params = session_get_cookie_params();
  setcookie(session_name(), '', 0, $params['path'], $params['domain'], $params['secure'], $params['httponly']); 
}

session_destroy(); 
header("location: index.html"); 