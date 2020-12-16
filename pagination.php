<html>
<head>
    <title> Pagination </title>
</head>
<body>

<?php

//database connection
$conn = mysqli_connect('localhost', 'newuser', 'password');
if (! $conn)
{
    die("Connection failed" . mysqli_connect_error());
}
else
    {
    mysqli_select_db($conn, 'pagination');
}

//define total number of results you want per page
$results_per_page = 10;


$query = "select * from alphabet";
$result = mysqli_query($conn, $query);
$number_of_result = mysqli_num_rows($result);



$number_of_page = ceil ($number_of_result / $results_per_page);


if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}


$page_first_result = ($page-1) * $results_per_page;



//retrieve the selected results from database
$query = "SELECT * FROM alphabet LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_array($result))
{
    echo $row['id'] . ' ' . $row['alphabet'] . '</br>';
}



for($page = 1; $page<= $number_of_page; $page++)
{
    echo '<a href = "pagination.php?page=' . $page . '">' . $page . ' </a>';
}

?>
</body>
</html>