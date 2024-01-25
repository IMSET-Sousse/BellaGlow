<?php

    if (isset($_POST) && $_POST){
        include_once("connect.php");

        $sql = "INSERT INTO resv (first name, last name, massage, Phone) 
        VALUES ('" . $_POST['first name'] . "', '" . $_POST['last name'] . "', '" . $_POST['massage'] . "', '" . $_POST['Phone'] . "');";
    
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close();
    }
    ?>