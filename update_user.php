<?php


$username = $_POST['username'];
$email_id = $_POST['email_id'];
$mobile = $_POST['mobile'];
$user_id= $_POST['user_id'];
$pincode= $_POST['pincode'];
$city= $_POST['city'];


$address= $_POST['address'];
$api_key= $_POST['api_key'];
$password= $_POST['password'];

$enroll_date = substr($_POST['enroll_date'], 0, 10);



$enroll_end_date = substr($_POST['enroll_end_date'], 0, 10);

$headers = array(
    'Content-type: application/json',
    'Authorization: '.$api_key.'',
);



list($day, $month, $year) = explode('/', $enroll_date);
$a =  mktime(0, 0, 0, $month, $day, $year);

list($day, $month, $year) = explode('/', $enroll_end_date);
$b =  mktime(0, 0, 0, $month, $day, $year);

$usertype =  "superuser";

$postData = array("user_name" => $username,'email_id' => $email_id,'mobile_no'=>$mobile,'password'=>$password,'address'=>$address,'city'=>$city,'enroll_date'=>$a,'enroll_end_date'=>$b,'users_type'=>$usertype,'pincode'=>$pincode,'user_id'=>$user_id);

$data_string = json_encode($postData);


$ch = curl_init('https://doodle.api.yaane.in/v1/super_users');

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");

curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt( $ch, CURLOPT_HTTPHEADER,$headers);

$results = curl_exec($ch);

$value = json_decode($results);

print_r($value->{'status'});