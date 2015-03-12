<?php
    print_r($_POST);
    $name = $_POST['name'];
    $password = $_POST['password'];
    setcookie('name', $_POST['name']);
    setcookie('password', $_POST['password']);
    $combo = json_encode($_POST);
    setcookie('namepassword', $combo);
?>
