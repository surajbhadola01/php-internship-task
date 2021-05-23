<?php
    include_once("../php/db_conn.php");
  
    // check login 

        if(isset($_POST["email"]) && isset($_POST["password"]))
        {
        //     echo "sadasd";
            $email = $_POST["email"];
            $password = $_POST["password"];
    
            $sql = "SELECT * FROM signup WHERE password ='$password'  AND email='$email'";
    
            $result = $db->query($sql);
            $row = $result->num_rows;
            if($row === 1){
                echo "success";
            }else{
                echo "failed";
            }
        
        }
    
