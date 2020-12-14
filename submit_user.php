<?php


$username = $_POST['username'];
$email_id = $_POST['email_id'];
$mobile = $_POST['mobile'];
$password= $_POST['password'];
$pincode= $_POST['pincode'];
$city= $_POST['city'];
$address= $_POST['address'];

$enroll_date = substr($_POST['enroll_date'], 0, 10);

$enroll_end_date = substr($_POST['enroll_end_date'], 0, 10);

$usertype =  "superuser";

$postData = array("user_name" => $username,'email_id' => $email_id,'mobile_no'=>$mobile,'password'=>$password,'address'=>$address,'city'=>$city,'enroll_date'=>$enroll_date,'enroll_end_date'=>$enroll_end_date,'users_type'=>$usertype);

$data_string = json_encode($postData);

$ch = curl_init('https://doodle.api.yaane.in/v1/super_users');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

$results = curl_exec($ch);

$value = json_decode($results);

print_r($value);


