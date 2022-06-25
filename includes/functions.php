<?php
function authenticated() : bool {
  session_start();
  $auth = $_SESSION['login'];
  // CHECK LOGIN
  if($auth) {
    return true;
  }
  return false;
}