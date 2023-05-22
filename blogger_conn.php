<?php
                     // Host        username         password  databasename 
    $conn= new mysqli("localhost", "wetinde1_easyboi", "Easyboi01","wetinde1_easynews");
    if(mysqli_connect_errno()){
        printf("connect failed: %s\n", mysqli_connect_error());
        exit();
    }
?>
