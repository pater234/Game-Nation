<?php
session_start();

include ($_SERVER["DOCUMENT_ROOT"] . "/connection.php");
include($_SERVER["DOCUMENT_ROOT"] . "/functions.php");
$user_data = check_login($con);
if ($user_data == null or !isset($user_data))
{
    $button1 = array("Log In", "/Login");
    $button2 = array("Sign Up", "/signup");
}
else
{
    $button1 = array("Account Information", "/accountinformation");
    $button2 = array("Log Out", "/logout");
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Classes56</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7aa84ac1ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSSFiles/styles.css">
</head>
<header>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Classes56 <img src="/othercontent/Logo.png" width=25% ></a>
            <button aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse" type="button">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbar">
                <ul class="navbar-nav m-lg-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/classes">View Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactinformation">Contact Information</a>
                    </li>
                </ul>
                <ul>
                    <a href="<?php echo $button1[1] ?>"><button class="btn" id="navbutton"><?php echo $button1[0] ?></button></a>
                    <a href="<?php echo $button2[1] ?>"><button class="btn" id="navbutton"><?php echo $button2[0] ?></button></a>
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>