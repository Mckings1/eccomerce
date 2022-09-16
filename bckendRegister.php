<?php
        session_start();
        require "dbcrend.php";
        if (isset($_POST['submit'])){
                   
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $gender = $_POST['gender'];
            $phoneNumber = $_POST['phoneNumber'];
            $email = $_POST['email'];   
            $password  = $_POST['password'];
        }


        $checkExist = "SELECT * FROM users WHERE email = '$email'";
        $queryExist = $connectDb->query($checkExist);
        if ($queryExist->num_rows > 0) {
           $_SESSION['message'] = "This email already exist.";
           header("Location: register.php");
        } 
        else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (`firstName`, `lastName`, `gender`, `phoneNumber`,  `email`,  `password`) 
                        VALUES ('$firstName', '$lastName',  '$gender', '$phoneNumber', '$email',  '$hashedPassword')";
            $queryDb = $connectDb->query($query);
                // print_r($query);

       
            if ($queryDb) {
                header("Location: login.php");
            } else {
                $_SESSION['message'] = "Registration Failed. Try again later.";
                
            }
        }
        
            //database connection
            // $conn = new mysqli('localhost', 'root', '', 'eccomerce_clone');
            // if($conn->connect_error){
            //     die('Connection Failed: '.$conn->connect_error); 
            // }
            // else{
            //     $stmt = $conn->prepare("insert into users(firstName, lastName, gender, phoneNumber, email, password)
            //     values(?, ?, ?, ?, ?, ?)");
            //     $stmt->bind_param("sssiss", $firstName, $lastName,  $gender, $phoneNumber, $email,  $password);
            //     // echo "registration succesful....";
            //     // header("Location: login.php");
            //     $stmt->close();
            //     $conn->close();
                
            // }
    // else{
    //     header("Location: register.php")
    // }

        
?>