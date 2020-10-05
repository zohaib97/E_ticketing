<?php
if (!(isset ( $_SESSION ['USERID'] ))) {

    header("location:adminlogin.php");
    }
?>