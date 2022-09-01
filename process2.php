<?php


// make sure there is connection to php page ----> action = "process.php"  method = "post"//

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cafedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_POST['sendmessage'])) {

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject'])  && !empty($_POST['message'])) {

        $fullname = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        
        //var_dump($fullname,$email,$phonenumber);

        //Insert Data to database 


        // Users ----> The name of the table.

        // Fullnames, email, phonenumber ----> Name of the columns.
        $query = "insert into contacts(name, email, subject, message) values('$fullname' , '$email', '$subject', ' $message')";
     
       //run query
       $run = mysqli_query($conn, $query) or die('Error: ' . mysqli_error($conn));;

       //check if our query runs
       if ($run) {
        echo  'Reservation made successfully ';
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