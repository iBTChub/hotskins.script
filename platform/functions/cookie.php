<?php

// Function to get or set a cookie value
function cookie($name, $value = null) {
  if ($value === null) {
    // Get cookie value
    return isset($_COOKIE[$name]) ? remove_script($_COOKIE[$name]) : null;
  } else {
    // Set cookie value
    setcookie($name, $value, time() + 3600, '/');
    // Update global array
    $_COOKIE[$name] = $value;
  }
}

// Function to work with session variables
function session($key, $value = null) {
  if ($value === null) {
    // Get session value
    return isset($_SESSION[$key]) ? (is_array($_SESSION[$key]) ? $_SESSION[$key] : remove_script($_SESSION[$key])) : null;
  } else {
    // Set session value
    $_SESSION[$key] = $value;
  }
}