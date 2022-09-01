<?php


// make sure there is connection to php page ----> action = "process.php"  method = "post"//

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cafedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['submit'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone'])  && !empty($_POST['date']) && !empty($_POST['department']) && !empty($_POST['doctor']) && !empty($_POST['message'])) {

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phone'];
        $Date = $_POST['date'];
        $department = $_POST['department'];
        $doctor = $_POST['doctor'];
        $Message = $_POST['message'];
        //var_dump($fullname,$email,$phonenumber);

        //Insert Data to database 


        // Users ----> The name of the table.

        // Fullnames, email, phonenumber ----> Name of the columns.
        $query = "insert into patients(name, email, phone, Appointmentdate, department, doctor, message) values('$fullname' , '$email', '$phonenumber', ' $Date', ' $department' ,'$doctor','$Message')";
     
       //run query
       $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));;

       //check if our query runs
       if ($run) {
        echo  '<alert>Information Submitted successfully!</alert> ';

        header("Location:index.php");
       }
       else {
        echo 'Data not  submitted';
       }


    }

    else {
        echo 'All fields are required';
       

    }

}







// Always make sure that the date in the database has the null property.




















?>