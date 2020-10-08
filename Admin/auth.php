<?php
if (!(isset ( $_SESSION ['USERID'] ) || isset($_SESSION['access_token']))) {

    header("location:adminlogin.php");
    }

?>