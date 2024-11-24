<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
 // Associative array to hold the form data
 $user_data = array(
    "name" => $_POST['name'],
    "email" => $_POST['email'],
    "password" => $_POST['password'],
    "age" => $_POST['age'],
    "gender" => $_POST['gender']}
);

?>