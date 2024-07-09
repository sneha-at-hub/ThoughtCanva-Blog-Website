<?php
require "constants.php";

$connection = new mysqli('localhost', 'root', '', 'blog');

if(mysqli_errno($connection)){
    die(mysqli_error($connection));
}