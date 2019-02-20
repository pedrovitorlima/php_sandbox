<?php 
    
    require_once("../model/user.class.php");

    $user = new User();

    #$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    #$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    $name = $_POST['name'];
    $email = $_POST["email"];

    $user->setName($name);
    $user->setEmail($email);

    $user->insert();
