<?php 
    // $con= mysqli_connect("hostname", "user", "password", "databasename");
    $con = mysqli_connect("localhost", "root", "", "blog");

    if( !$con){
        die('Connection Failed'. mysqli_connect_error());
    }

?>