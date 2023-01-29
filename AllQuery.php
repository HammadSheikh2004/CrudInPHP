<?php
include_once 'Connect.php';
if (isset($_REQUEST['btnsave']) == true) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];
    $sql = "INSERT INTO `data`(`Name`, `Email`, `Password`, `Gender`, `Country`) VALUES ('$name','$email','$password','$gender','$country')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("location:index.php");
} elseif (isset($_REQUEST['btnedit']) == true) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $gender = $_REQUEST['gender'];
    $country = $_REQUEST['country'];
    $editQuery = "UPDATE `data` 
    SET 
    `Name`='$name',
    `Email`='$email',
    `Password`='$password',
    `Gender`='$gender',
    `Country`='$country' where `Id` = $id ";
    mysqli_query($conn, $editQuery);
    mysqli_close($conn);
    header("location:ReadData.php");
} elseif (isset($_GET['Deleteid']) == true) {
    $id = $_GET['Deleteid'];
    $Delete = "DELETE FROM `data` WHERE `Id` = $id";
    mysqli_query($conn, $Delete);
    header("location: ReadData.php");
}
