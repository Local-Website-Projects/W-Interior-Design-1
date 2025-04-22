<?php
session_start();
require_once('config/dbConfig.php');
$db_handle = new DBController();
date_default_timezone_set("Asia/Dhaka");
$inserted_at = date("Y-m-d H:i:s");
if(!isset($_SESSION['admin'])){
    echo "
    <script>window.location.href = 'Login';</script>
    ";
}


if(isset($_POST['update_password'])){
    $password = $db_handle->checkValue($_POST['password']);
    $new_password = $db_handle->checkValue($_POST['new_password']);
    $hashedPassword = password_hash($new_password, PASSWORD_DEFAULT);

    $fetch_password = $db_handle->runQuery("SELECT * FROM `login` WHERE `id`={$_SESSION['admin']}");
    $hashed_password = $fetch_password[0]['password'];
    if(password_verify($password, $hashed_password)){
        $update_password = $db_handle->insertQuery("UPDATE `login` SET`password`='$hashedPassword',`updated_at`='$inserted_at' WHERE `id`={$_SESSION['admin']}");
        if($update_password){
            $_SESSION['status'] = 'Success';
            echo "<script>window.location.href='Update-Password';</script>";
        } else{
            $_SESSION['status'] = 'Error';
            echo "<script>window.location.href='Update-Password';</script>";
        }
    } else {
        $_SESSION['status'] = 'Error';
        echo "<script>window.location.href='Update-Password';</script>";
    }
}