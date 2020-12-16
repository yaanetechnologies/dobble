<?php
session_start();

//$api_key = $_SESSION['api_key'];

$api_key = 'd191ddee617367bc17b1f36c79290eaca0d6a0449099e3b38b2ed67b2d43dcbd';


if(isset($_GET['limit']))
{
    $output = $_GET['limit'] + 10;
}
else

{
    $output = 0;
}


//print_r("https://doodle.api.yaane.in/v1/super_users?limit=$output");


$headers = array(
    'Content-type: application/json',
    'Authorization: '.$api_key.'',
);


$ch = curl_init("https://doodle.api.yaane.in/v1/super_users?limit=$output");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt( $ch, CURLOPT_HTTPHEADER,$headers);

$results = curl_exec($ch);

$value = json_decode($results);

//echo '<pre>';

$responses = $value->{'user_info'};



$number_of_result = 100;

$results_per_page = 10;


$number_of_page = ceil ($number_of_result / $results_per_page);

if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$page_first_result = ($page-1) * $results_per_page;

foreach ($responses as $respons)
{

    //print_r($respons);

    $address = $respons->{'address'};
    $city = $respons->{'city'};
    $email_id = $respons->{'email_id'};
    $enroll_date = $respons->{'enroll_date'};
    $enroll_end_date = $respons->{'enroll_end_date'};
    $mobile_no = $respons->{'mobile_no'};
    $pincode = $respons->{'pincode'};
    $user_name = $respons->{'user_name'};
    $users_type = $respons->{'users_type'};



}

for($page = 1; $page<= $number_of_page; $page++)
{


    echo '<a href = "user.php?page=' . $page . '&limit=' .$number_of_page.'">' . $page . ' </a>';

}
