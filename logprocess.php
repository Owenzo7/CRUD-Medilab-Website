<?php

// include('config.php');


$servername = "localhost"; //My server
$username = "root";
$password = ""; // No password
$dbname = "Cafedb"; //Name of database

//create a connection

$conn = new mysqli($servername, $username, $password, $dbname);

session_start();

if (isset($_POST['login'])) {
    



    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));



    $query = "SELECT * FROM register WHERE username= '$username' AND passwords= '$password'";

    $result = mysqli_query($conn,$query);


    if (mysqli_num_rows($result) == 1) {

        echo "<script>alert('You are good to go')</script>";

        $role =  "SELECT roles FROM register WHERE username= '$username' AND passwords='$password'";

        $roles = mysqli_query($conn, $role);


        $row = mysqli_fetch_array($roles);

        if ($row['roles'] == "Admin") {

            $_SESSION['Admin'] = $username;

            header("Location:admin.php");
            
        }

        else if($row['roles'] == "User") {

            $_SESSION['User'] = $username;

            header("Location:user.php");

        }


    }


    

    else{

        echo "<script>alert('Invalid account')</script>";

        header("Location:register.php");
    }
}








?>