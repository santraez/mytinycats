<?php
/////////////////////////////////////////////////////////
// CLEAR SESSION
/////////////////////////////////////////////////////////
// DESTROY SESSION
session_start();
$_SESSION = [];
// REDIRECT TO INDEX
header ("Location: /");