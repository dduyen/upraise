<?php
include_once('../connect.php');
include"./login_check.php";
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
$id=$_GET['id'];
$sql = "DELETE FROM admin WHERE id='$id'";
$res = mysqli_query($conn, $sql);
if($res==true)
        {
            header('location:'.SITEURL.'admin/admin.php');

        }
        else
        {
            header('location:'.SITEURL.'admin/admin.php');
        }}
?>