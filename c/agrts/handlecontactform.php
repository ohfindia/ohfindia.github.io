<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

include('./sentmail.php');

$response = array();

if(isset($_POST)){
    $name = $_POST['name'];
    $company = $_POST['company'];
    $number = $_POST["number"];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $finder = $_POST['finder'];
    $message = $_POST['message'];

    if(emailForm($name, $company, $number, $email, $website, $finder, $message)){
        $response = array(
        "status" => "success",
        "error" => false,
        "message" => "Email Sent Successfully",
        );
    }
    else{
        $response = array(
        "status" => "error",
        "error" => true,
        "message" => "Issue in sending email.",
        );
    }
}

else {
    $response = array(
        "status" => "error",
        "error" => true,
        "message" => "Issue in sending email.",
    );
}



echo json_encode($response);

?>