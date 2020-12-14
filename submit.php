<?php


$email = $_POST['email'];
$password = $_POST['password'];
$device_id = "";

$postData = array("email" => $email,'password' => $password,'device_id'=>$device_id);

$data_string = json_encode($postData);


$ch = curl_init('https://doodle.api.yaane.in/v1/auth/login');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

$results = curl_exec($ch);

$value = json_decode($results);

$status = $value->{'status'};

$userinfo = $value->{'user_info'};

$usertype = $userinfo->{'users_type'};

print_r($usertype);




