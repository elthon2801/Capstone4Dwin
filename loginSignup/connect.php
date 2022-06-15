<?php
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];



    //database connection
    $conn = new mysqli('localhost', 'root','','db1');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration_sample(name, password, email)
            values(?, ?, ?)");
        $stmt->bind_param("sss",$name, $password, $email);
        $stmt->execute();
        echo "Registration Successful";
        $stmt->close();
        $conn->close();
    }


?>