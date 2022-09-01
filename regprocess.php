<?php


    if (isset($_POST["submit"])) {

        // Database connection in separate file
        // include ('config.php');

        $servername = "localhost"; //My server
        $username = "root";
        $password = ""; // No password
        $dbname = "Cafedb"; //Name of database

        //create a connection

        $conn = new mysqli($servername, $username, $password, $dbname);

        $username = mysqli_real_escape_string($conn, $_POST["username"]);
        $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
        $conpassword = mysqli_real_escape_string($conn, md5($_POST["conpassword"]));
        $role = mysqli_real_escape_string($conn, $_POST["role"]);
        

        
      

        if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM register WHERE username='{$username}'")) > 0) {
            header("Location:register.php");
            echo "<script>alert('{$username} - Username has already been taken.');</script>";

            
        }
        
        else {
            if ($password === $conpassword) {
                $sql = "INSERT INTO register (username,passwords,roles) VALUES ('{$username}', '{$password}', '{$role}')";
                $result = mysqli_query($conn, $sql);

                if ($result) {

                     //echo success then redirect
                     header("Location:login.php");
                     echo "<script>alert('Success')</script>";

                     


                    //if result is successful navigate to dashboard page
                    
                    

                }else {
                    echo "<script>Error: ".$sql.mysqli_error($conn)."</script>";
                }
            }else {
                echo "<script>
alert('Passwords do not match !');
window.location.href='register.php';
</script>";
                
            }
        }
    }








        


            









?>