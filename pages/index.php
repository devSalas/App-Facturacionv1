<?php
session_start();
 if($_SESSION["usuario"]){
     header("Location:panel");
 }else{
    header("Location:login.php");
 }

?>