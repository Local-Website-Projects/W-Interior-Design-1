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

$admin = $_SESSION['admin'];

if(isset($_POST['add_blog'])){
    $blog_title = $db_handle->checkValue($_POST['blog_title']);
    $publish_date = $db_handle->checkValue($_POST['publish_date']);
    $blog_body = $db_handle->checkValue($_POST['blog_body']);

    $image = '';
    if (!empty($_FILES['image']['name'])) {
        $RandomAccountNumber = mt_rand(1, 99999);
        $file_name = $RandomAccountNumber . "_" . $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp  = $_FILES['image']['tmp_name'];
        move_uploaded_file($file_tmp, "../blog_image/" . $file_name);
        $image = "blog_image/" . $file_name;
    }

    $insert_blog = $db_handle->insertQuery("INSERT INTO `blogs`(`doctor_id`, `blog_title`, `publish_date`, `blog_body`,`blog_image`, `inserted_at`) VALUES ('$admin','$blog_title','$publish_date','$blog_body','$image','$inserted_at')");
    if($insert_blog){
        $_SESSION['status'] = 'Success';
        echo "
        <script>
        window.location.href = 'Blogs';
</script>
        ";
    } else {
        $_SESSION['status'] = 'Error';
        echo "
        <script>
        window.location.href = 'Blogs';
</script>
        ";
    }
}