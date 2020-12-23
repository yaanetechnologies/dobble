

<?php
session_start();

$api_key = $_SESSION['api_key'];

//$api_key = 'd191ddee617367bc17b1f36c79290eaca0d6a0449099e3b38b2ed67b2d43dcbd';


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



$number_of_result = 50;

$results_per_page = 10;


$number_of_page = ceil ($number_of_result / $results_per_page);

if (!isset ($_GET['page']) ) {
    $page = 1;
} else {
    $page = $_GET['page'];
}

$page_first_result = ($page-1) * $results_per_page;



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Unique User</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<style>

    .menu-sidebar
    {
        width: 200px !important;
    }
    .header-desktop
    {
        left: 200px;
    }

    .pagination-sm .page-link {
        padding: .25rem .5rem;
        font-size: .875rem;
        line-height: 1.5;
    }
    .page-link {
        position: relative;
        display: block;
        padding: .5rem .75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6;
    }
    .pagination
    {

        float: right;
    }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: .2rem;
        border-bottom-left-radius: .2rem;
        font-size: 17px;
    }
</style>

<body class="animsition">
<div class="page-wrapper">



    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid">
                <div class="header-mobile-inner">
                    <a class="logo" href="index.html">
                        <h3>Doodle</h3>
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li>
                        <a href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
                    </li>
                    <li>
                        <a href="table.html">
                            <i class="fas fa-table"></i>Tables</a>
                    </li>
                    <li>
                        <a href="form.html">
                            <i class="far fa-check-square"></i>Forms</a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="fas fa-calendar-alt"></i>Calendar</a>
                    </li>
                    <li>
                        <a href="map.html">
                            <i class="fas fa-map-marker-alt"></i>Maps</a>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-copy"></i>Pages</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                            <li>
                                <a href="forget-pass.html">Forget Password</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-desktop"></i>UI Elements</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="button.html">Button</a>
                            </li>
                            <li>
                                <a href="badge.html">Badges</a>
                            </li>
                            <li>
                                <a href="tab.html">Tabs</a>
                            </li>
                            <li>
                                <a href="card.html">Cards</a>
                            </li>
                            <li>
                                <a href="alert.html">Alerts</a>
                            </li>
                            <li>
                                <a href="progress-bar.html">Progress Bars</a>
                            </li>
                            <li>
                                <a href="modal.html">Modals</a>
                            </li>
                            <li>
                                <a href="switch.html">Switchs</a>
                            </li>
                            <li>
                                <a href="grid.html">Grids</a>
                            </li>
                            <li>
                                <a href="fontawesome.html">Fontawesome Icon</a>
                            </li>
                            <li>
                                <a href="typo.html">Typography</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="dashboard.html">
                <h3>Doodle</h3>
                <!--<img src="images/icon/logo.png" alt="Cool Admin" />-->
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a href="dashboard.php">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">

                    <!--<form class="form-header" action="" method="POST">-->
                    <!--<input class="au-input au-input&#45;&#45;xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />-->
                    <!--<button class="au-btn&#45;&#45;submit" type="submit">-->
                    <!--<i class="zmdi zmdi-search"></i>-->
                    <!--</button>-->
                    <!--</form>-->
                    <div class="header-button" style="float: right !important;">
                        <!--<div class="noti-wrap">-->
                        <!--<div class="noti__item js-item-menu">-->
                        <!--<i class="zmdi zmdi-comment-more"></i>-->
                        <!--<span class="quantity">1</span>-->
                        <!--<div class="mess-dropdown js-dropdown">-->
                        <!--<div class="mess__title">-->
                        <!--<p>You have 2 news message</p>-->
                        <!--</div>-->
                        <!--<div class="mess__item">-->
                        <!--<div class="image img-cir img-40">-->
                        <!--<img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<h6>Michelle Moreno</h6>-->
                        <!--<p>Have sent a photo</p>-->
                        <!--<span class="time">3 min ago</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="mess__item">-->
                        <!--<div class="image img-cir img-40">-->
                        <!--<img src="images/icon/avatar-04.jpg" alt="Diane Myers" />-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<h6>Diane Myers</h6>-->
                        <!--<p>You are now connected on message</p>-->
                        <!--<span class="time">Yesterday</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="mess__footer">-->
                        <!--<a href="#">View all messages</a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="noti__item js-item-menu">-->
                        <!--<i class="zmdi zmdi-email"></i>-->
                        <!--<span class="quantity">1</span>-->
                        <!--<div class="email-dropdown js-dropdown">-->
                        <!--<div class="email__title">-->
                        <!--<p>You have 3 New Emails</p>-->
                        <!--</div>-->
                        <!--<div class="email__item">-->
                        <!--<div class="image img-cir img-40">-->
                        <!--<img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>Meeting about new dashboard...</p>-->
                        <!--<span>Cynthia Harvey, 3 min ago</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="email__item">-->
                        <!--<div class="image img-cir img-40">-->
                        <!--<img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>Meeting about new dashboard...</p>-->
                        <!--<span>Cynthia Harvey, Yesterday</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="email__item">-->
                        <!--<div class="image img-cir img-40">-->
                        <!--<img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>Meeting about new dashboard...</p>-->
                        <!--<span>Cynthia Harvey, April 12,,2018</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="email__footer">-->
                        <!--<a href="#">See all emails</a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="noti__item js-item-menu">-->
                        <!--<i class="zmdi zmdi-notifications"></i>-->
                        <!--<span class="quantity">3</span>-->
                        <!--<div class="notifi-dropdown js-dropdown">-->
                        <!--<div class="notifi__title">-->
                        <!--<p>You have 3 Notifications</p>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c1 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-email-open"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>You got a email notification</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c2 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-account-box"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>Your account has been blocked</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__item">-->
                        <!--<div class="bg-c3 img-cir img-40">-->
                        <!--<i class="zmdi zmdi-file-text"></i>-->
                        <!--</div>-->
                        <!--<div class="content">-->
                        <!--<p>You got a new file</p>-->
                        <!--<span class="date">April 12, 2018 06:50</span>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--<div class="notifi__footer">-->
                        <!--<a href="#">All notifications</a>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="account-wrap">
                            <div class="account-item clearfix js-item-menu">
                                <div class="content">
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION['username'];  ?></a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="main-content">

            <div class="row" >

                <div class="col-md-12">

                    <h3 style="margin-left: -6%;font-weight: normal !important;">Super User Details</h3>

                </div>

            </div>

            <div class="section__content section__content--p30">
                <div class="container-fluid">



                    <div class="row" style="margin-left: -14                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    %;">

                        <div class="row m-t-30">
                            <div class="col-md-12">



                                <!-- DATA TABLE-->
                                <div class="table-responsive" style="margin-left: -8%;" >
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                        <tr>

                                            <th>S.NO</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th>
                                            <th>status</th>
                                            <th>Action</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        $i = 1;

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
                                            $user_id = $respons->{'user_id'};

                                            ?>
                                            <tr class="block_newuser<?php  echo $user_id ?>" id="block_newuser">

                                                <td><?php echo $i  ?></td>
                                                <td>
                                                    <p style="width: 25px">
                                                    <?php echo $user_name  ?>
                                                    </p>

                                                </td>
                                                <td>
                                                    <p>

                                                        <?php echo $email_id  ?>

                                                    </p>



                                                </td>
                                                <td>
                                                    <p>

                                                    <?php echo $mobile_no  ?>

                                                    </p>

                                                </td>
                                                <td>
                                                    <p>

                                                        <?php echo $address  ?><br>&nbsp;<?php echo $pincode  ?>
                                                    </p>
                                                   </td>


                                                <td>
                                                    <button type="button" class="btn btn-primary block_button" style="font-size: 13px;" data-id="<?php echo $user_id  ?>" data-name = "<?php echo $user_name;  ?>" >Block</button>

<!--                                                    <button style="margin-top: 1%;font-size: 13px;" type="button" class="btn btn-primary reset_password">Reset Password</button>-->


                                                </td>


                                                <td>
                                                    <a href="view_user.php?id=<?php echo $user_id; ?>">
                                                        <button type="button" class="btn btn-primary" style="font-size: 13px;">View</button>

                                                    </a>

                                                </td>


                                            </tr>



                                            <?php



                                            $i++; }




                                        ?>



                                        </tbody>
                                    </table>

                                    <div class="pagination" style="margin-top: 3%;margin-bottom: 2%;">

                                        <?php

                                        for($page = 1; $page<= $number_of_page; $page++)
                                        {


?>


                                            <ul class="pagination pagination-sm">

                                                <li class="page-item">

                                                    <a class="page-link" href="unique_user.php?page=<?php echo $page  ?>&limit=<?php echo $number_of_page  ?>"><?php echo $page  ?></a>

                                                </li>
                                            </ul>

                                        <?php

                                        }


                                        ?>

                                    </div>

                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class="modal reset_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reset Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-4">

                        <label>Old Password</label>

                    </div>
                    <div class="col-md-6">

                        <input type="password" id="old_password" name="old_password" class="form-control">
                    </div>

                </div>

                <br>


                <div class="row">

                    <div class="col-md-4">

                        <label>New Password</label>

                    </div>
                    <div class="col-md-6">

<input type="password" name="new_password" id="new_password" class="form-control">
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary reset_submit">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<script>

    // $(document).ready(function() {
    //     $('#example').DataTable();
    // });

    $('#example').DataTable({
        "scrollY": 300,
        "scrollX": true

    });
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

<script>

    $('.block_button').on('click',function()
    {
        var user_id = $(this).attr('data-id');
        var user_name = $(this).attr('data-name');


       var msg = "Are you sure you want to block this " + user_name + "?";

       if(confirm(msg))
       {


           $('.block_newuser'+user_id+' td:nth-child(6) .block_button').hide();

           $('.block_newuser'+user_id+' td:nth-child(6)').append('<button type="button" style="margin-top:1%;font-size: 13px;" class="btn btn-danger unblock_button" data-id="'+user_id+'" data-name ="'+user_name+'">Unblock</button>');


          // $('tr .block_class').removeClass('change_me').addClass('new_class');
       }


    });


    $('#block_newuser .unblock_button').on('click',function()
    {
        alert("ok");

        var user_id = $(this).attr('data-id');
        var user_name = $(this).attr('data-name');


       var msg = "Are you sure you want to block this " + user_name + "?";

       if(confirm(msg))
       {


           $('.block_newuser'+user_id+' td:nth-child(6) .block_button').hide();
           $('.block_newuser'+user_id+' td:nth-child(6)').append('<button type="button" style="margin-top:1%;font-size: 13px;" class="btn btn-danger unblock_button" data-id="'+user_id+'" data-name ="'+user_name+'">Unblock</button>');


          // $('tr .block_class').removeClass('change_me').addClass('new_class');
       }


    })

    $('.reset_password').on('click',function()
    {
        $('.reset_modal').modal('show');

    })

    $('.reset_submit').on('click',function()
    {

        var new_password = $('#new_password').val();
        var old_password = $('#old_password').val();

        if(new_password == '')
        {
            alert("Enter New Password");
        }
        else if (old_password == '')
        {
            alert("Enter Old Password");
        }

        else
        {

            alert("Your Password have changed successfully");

            $('.reset_modal').modal('hide');
        }
    })


    $('.reset_modal').on('hidden.bs.modal', function (e) {
        $(this)
            .find("input,textarea,select")
            .val('')
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
    })

</script>

</body>

</html>
<!-- end document-->
