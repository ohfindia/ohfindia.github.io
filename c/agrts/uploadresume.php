<?php

header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");

$response = array();
$upload_dir = 'resumes/';
$server_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

if($_FILES['resume']){
  $fileName = $_FILES['resume']['name'];
  $error = $_FILES['resume']['error'];
  $tmp_name = $_FILES["resume"]["tmp_name"];


  if($error > 0){
      $response = array(
        "status" => "error",
        "error" => true,
        "message" => "Error uploading the file!"
      );
    }else 
    {
      $uid = uniqid().".".pathinfo($fileName, PATHINFO_EXTENSION);
      $upload_name = $upload_dir.$uid;

      if(move_uploaded_file($tmp_name , $upload_name)) {
        $response = array(
          "status" => "success",
          "error" => false,
          "message" => "File uploaded successfully",
          "name"=> $uid,
          "url" => $server_url."/".$upload_name
        );
      }else
      {
        $response = array(
          "status" => "error",
          "error" => true,
          "message" => "Error uploading the file!"
        );
      }
    }
} else{
  $response = array(
    "status" => "error",
    "error" => true,
    "message" => "No file was sent!"
  );
}

echo json_encode($response);

?>