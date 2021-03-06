<?php
session_start();
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://kit.fontawesome.com/7aa84ac1ab.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/CSSFiles/styles.css">
    <link rel="icon" href="/othercontent/Logo.ico">
    <style>
        #navbar {
            text-align: center;
        }
    </style>
</head>
<header>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Classes56 <img src="/othercontent/Logo.png" width=25%></a>
            <button class="navbar-toggler" data-bs-target="#navbar" data-bs-toggle="collapse" type="button">
                <span class="fas fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar"> <!--justify-content-center mx-auto order-3 order-lg-2"-->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/classes">View Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/private-tutoring">Private Tutoring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/signup">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/donate">Donate</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/faq">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>

<!--aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"-->

<script>
    $(document).ready(function ()
    {
        var previousScroll = 0;
        $(window).scroll(function ()
        {
            var currentScroll = $(this).scrollTop();
            if (currentScroll < 120)
            {
                showTopNav();
            } else if (currentScroll > 0 && currentScroll < $(document).height() - $(window).height())
            {
                if (currentScroll > previousScroll)
                {
                    hideNav();
                    previousScroll = currentScroll;
                } else
                {
                    if (previousScroll - currentScroll > 150 || currentScroll < 120)
                    {
                        showNav();
                        previousScroll = currentScroll;
                    }
                }
            }
        })
        function showTopNav()
        {
            $(".navbar").css('top', "0px");
        }
        function hideNav()
        {
            var navh = $(".navbar").outerHeight();
            $(".navbar").css('top', -navh);
        }
        function showNav()
        {
            $(".navbar").css('top', "0px");
        }
    });
</script>
