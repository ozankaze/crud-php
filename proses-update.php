<?php
    session_start();
    
    if(!  isset($_SESSION['email'])) {
        header("Location: login.php");
    } //log

    include_once("config.php");
    if(isset($_POST['submit'])) {
        // echo "<pre>".print_r($_POST, 1)."<pre>";

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password =md5($_POST['password']);

    mysqli_query($mysqli,   "UPDATE users
                            SET nama ='$nama', alamat='$alamat', email='$email', password='$password'
                            WHERE id=$id ");

    header("location:index.php");
    }
?>