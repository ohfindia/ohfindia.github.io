<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
session_start();
include('conn.php');
$con = mysqli_connect($host_name, $user, $password,$db_name);
$table_name = 'touch_leads';

if (isset($_POST["submit"]))
 {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $trucks = $_POST['trucks'];
        $equipment = $_POST['equipment'];

    #sql query to insert into database
    $sql = "INSERT INTO $table_name (`name`, `phone`, `email`, `trucks`, `equipment`) VALUES ('$name', '$phone', '$email', '$trucks', '$equipment')";
    if(mysqli_query($con,$sql)){

        $_SESSION['status'] = "success";
        header("Location: /");
    }
    else{
        $_SESSION['status'] = "error";
        header("Location: /");
    }
}

?>