<?php 
    include('../connect.php');
    session_destroy(); 
    header('location:'.SITEURL.'admin/login.php');

?>