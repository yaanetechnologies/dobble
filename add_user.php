<?php


session_start();

//print_r($_SESSION['api_key']);

$api_key = $_SESSION['api_key'];


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
    <title>Doddle | Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <link href="timepicker/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />

    <link href="datepicker/dist/css/bootstrap-datepicker.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<style>
    .ajax_loader

    {
        position: fixed;

        margin-top: 19%;
        margin-left: 44%;

    }

    #loadingmessage

    {
        position: fixed;
        z-index: 999999;

        background: rgba(0,0,0,0.8);
        height: 100%;
        width: 100%;
    }

    em
    {
        color:red;
    }
</style>

<body class="animsition">
<div id="loadingmessage" style="display: none">
    <img src="images/loadingimg.gif" class="ajax_loader" alt="image">
</div>

<div class="page-wrapper">
    <!-- HEADER MOBILE-->
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
                    <li class="has-sub">
                        <a class="js-arrow" href="#">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                            <li>
                                <a href="index.html">Dashboard 1</a>
                            </li>
                            <li>
                                <a href="index2.html">Dashboard 2</a>
                            </li>
                            <li>
                                <a href="index3.html">Dashboard 3</a>
                            </li>
                            <li>
                                <a href="index4.html">Dashboard 4</a>
                            </li>
                        </ul>
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
    <!-- END MENU SIDEBAR-->

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
                                    <a class="js-acc-btn" href="#"><?php echo $_SESSION['username']  ?></a>
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

            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">

                        <input type="hidden" id="api_key" name="api_key" class="form-control" value="<?php echo $_SESSION['api_key'] ?>">


                        <div class="col-lg-12 col-md-12">
                            <div class="card">
<!--                                <div class="card-header">-->
<!--                                    <strong>Basic Form</strong> Elements-->
<!--                                </div>-->
                                <div class="card-body card-block">
                                    <form action="" id="user_form" method="post" enctype="multipart/form-data" class="form-horizontal">
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="first_name" class=" form-control-label">FirstName</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="first_name" name="first_name" placeholder="Enter Firstname" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="mobile" class=" form-control-label">Mobile</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="mobile" maxlength="10" name="mobile" placeholder="Enter Mobile" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="email_id" class=" form-control-label">Email</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="email_id" name="email_id" placeholder="Enter Email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="password" class="form-control-label">Password</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="password" id="password" name="password" placeholder="Enter Password" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="address" class=" form-control-label">Address</label>
                                            </div>
                                            <div class="col-12 col-md-9">

                                                <textarea rows="9" name="address" id="address" class="form-control" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="enroll_date" class=" form-control-label">Enroll Date</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="input-group date">
                                                    <input type="text" value="" name="fromdate" class="form-control" id="fromdate"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="end_date" class=" form-control-label">Enroll End Date</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <div class="input-group date">
                                                    <input type="text" value="" name="enddate" class="form-control" id="end_date"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="pincode" class="form-control-label">Pincode</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="pincode" maxlength="6" name="pincode" placeholder="Enter Pincode"  class="form-control">
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="city" class="form-control-label">City</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="city" name="city" placeholder="Enter city"  class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <center>
                                                <button type="submit" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Submit
                                                </button>

                                            </center>

                                        </div>


                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<script src="validate/validate.js"></script>


<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>

<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<script src="datepicker/dist/js/bootstrap-datepicker.js"></script>


<script src="timepicker/js/jquery.datetimepicker.js"></script>



<script src="js/main.js"></script>
<!---->


<!-- Main JS-->


<script>

    $.validator.addMethod("mobile",function(){

        var mobilenum = $('#mobile').val();


        if(mobilenum.length==10)
        {
            return true;

        }
        else
        {
            return false;
        }

    },"Enter valid number");


    $('#user_form').validate({

        rules:{

            first_name: {
                required: true,

            },


            email_id:{

                required:true,

                email:true

            },

            mobile:{

                required:true,

                number: true,

                mobile:true


            },
            pincode:{
                required:true,
                number: true

            },

            city:
                {
                required:true

            },

            password:
                {
                required:true

            },
            fromdate:
                {
                required:true

            },
            enddate:
                {
                required:true

            }





        },
        messages:{
            first_name: {
                required: "Please enter a Firstname",


            },



            email_id:{
                required:"PLease Enter Emailid",

                email:"Emailid should valid"
            },

            mobile:{

                required:"PLease Enter mobile num",

                number :"Please Enter Only Numeric value"

            },
            pincode:{

                required:"Pincode is req",
                number: "Please Enter Only Numeric value"


            },
          city:{

                required:"City is req"
          },

        password:{

                required:"password is req"


            },
        fromdate:{

                required:"Enroll Date is req"


            },
        enddate:{

                required:"Enroll End Date is req"


            }



        },
        errorElement: "em",
        errorPlacement: function ( error, element ) {
            // Add the `help-block` class to the error element
            error.addClass( "help-block" );

            if ( element.prop( "type" ) === "checkbox" ) {
                error.insertAfter( element.parent( "label" ) );
            } else {
                error.insertAfter( element );
            }
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
        },
        submitHandler:function(form)
        {
            $('#loadingmessage').css('display','block');

           var fd = new FormData();

            var username = $('#first_name').val();
            var api_key = $('#api_key').val();
            var email_id = $('#email_id').val();
            var mobile = $('#mobile').val();
            var password = $('#password').val();
            var pincode = $('#pincode').val();
            var city = $('#city').val();
            var address = $('#address').val();
            var enroll_date = $('#fromdate').val();
            var enroll_end_date = $('#end_date').val();

            fd.append('username', username);
            fd.append('api_key', api_key);
            fd.append('email_id', email_id);
            fd.append('mobile', mobile);
            fd.append('password', password);
            fd.append('pincode', pincode);
            fd.append('city', city);
            fd.append('address', address);
            fd.append('enroll_date', enroll_date);
            fd.append('enroll_end_date', enroll_end_date);

            $.ajax({

                url : 'submit_user.php',

                type : 'post',
                data: fd,
                cache : false,
                dataType    : 'json',
                processData : false,
                contentType: false,

                success:function(data)
                {
                    $('#loadingmessage').css('display','none');

                    if(data == 200)
                    {

                        alert("User Created");

                        window.location.href = "unique_user.php";
                    }
                    else
                    {

                        alert("User Failed to create")
                    }
                }
            })


        }

    });

</script>

<script>
    $('#fromdate').datetimepicker({

        formatDate:'yyyy-mm-dd',
        position: "left auto"
    });
    $('#end_date').datetimepicker({

        formatDate:'yyyy-mm-dd',
        position: "left auto"
    });
</script>

</body>

</html>
<!-- end document-->
