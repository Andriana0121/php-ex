<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-dar navbar-fixed-top ">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/">HOME</a></li>
                    <li><a href="/products/list">SERVICE</a></li>
                    <li><a href="/about">ABOUT</a></li>
                    <li><a href="/contact">CONTACT</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MyACCOUNT
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/account/view">LOG IN</a></li>
                            <li><a href="/account/register">LOG UP</a></li>
                            <!-- <li><a href="/admin">ADMIN</a></li> -->
                        </ul>
                    </li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <?= $content ?>

    <footer class="text-center">
        <a class="up-arrow" href="" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
    </footer>
</body>

</html>
<style>
    body {
        font: 400 15px/1.8 Lato, sans-serif;
        color: #777;
        padding-top: 50px;

    }

    h3,
    h4 {
        margin: 10px 0 30px 0;
        letter-spacing: 10px;
        font-size: 20px;
        color: #111;
    }

    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: white !important;
    }

    .navbar-nav li a:hover {
        color: black !important;
    }

    .navbar-nav li.active a {
        color: black !important;
        background-color: black !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    .open .dropdown-toggle {
        color: black;
        background-color: black !important;
    }

    .dropdown-menu li a {
        color: #000 !important;
    }

    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: white !important;
    }

    .navbar-nav li a:hover {
        color: black !important;
    }

    .navbar-nav li.active a {
        color: black !important;
        background-color: black !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    .open .dropdown-toggle {
        color: black;
        background-color: black !important;
    }

    .dropdown-menu li a {
        color: #000 !important;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }

    .form-control {
        border-radius: 0;
    }
</style>