<?php
session_start();
$api_key = $_SESSION['api_key'];



require 'PHPExcel/Classes/PHPExcel.php';
require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';

$filename = $_FILES["excel_upload"]['name'];


$allowedFileType = [
    'application/vnd.ms-excel',
    'text/xls',
    'text/xlsx',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
];

$allowedFileExtension=['xlsx','xls'];


$extension = pathinfo($filename, PATHINFO_EXTENSION);

$headers = array(

    "Content-Type: multipart/form-data",
    "Authorization: $api_key"
);


if(!empty($filename))
{

    if (in_array($extension, $allowedFileExtension))
    {


        $uploadFilePath = 'uploads/'.basename($_FILES['excel_upload']['name']);

        move_uploaded_file($_FILES['excel_upload']['tmp_name'], $uploadFilePath);

        $objPHPExcel = PHPExcel_IOFactory::load($uploadFilePath);

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://doodle.api.yaane.in/v1/multiple_super_user",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array('excel_file'=> new CURLFILE('uploads/'.$filename,'text/plain', 'file')),
            CURLOPT_HTTPHEADER =>$headers,
            CURLOPT_SAFE_UPLOAD => true

        ));

        $response = curl_exec($curl);


        $value = json_decode($response);

        if($value->{'status'} == '200')
        {
            $data['success'] = 'Excel File is successfully uploaded';
        }
        else
        {
            $data['error'] = 'Excel File is failed to upload';
        }




    }
    else
    {
        $data['error'] = "This is Not a Excelsheet";
    }
}
else
{
    $data['error'] = 'Excel file is Required';
}

print_r(json_encode($data));