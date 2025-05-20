<?php
    $dbServerName="localhost";
    $dbUserName="root";
    $dbPassword="Nilakshana_123@";
    $dbName="sweet_delights";

    $connect=mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);

    if(!$connect){
        die("connection faild to database ".mysqli_connect_error());
    }
?>