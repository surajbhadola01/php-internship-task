<?php

    $db = new mysqli("localhost","root","","php-intern");

    if($db->connect_error){
        die("connection failed");
    }

?>