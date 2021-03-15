<?php

// turn on error reporting
error_reporting(1);
ini_set('error_reporting', E_ALL);

session_destroy();

echo"Logout Successfully";
header("location:../index.html");

?>