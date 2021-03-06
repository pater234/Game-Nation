<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>


<style>
    body {
        font-family: "Montserrat", sans-serif;
    }
    .homepageBreak {
        width: 75%;
        margin: 3% auto;
    }
    #mission {
        margin-top: 3%;
    }

    @media only screen and (max-width: 400px) {
        #donateImg {
            width: 95%;
        }
    }
</style>

<body class="body" style="position: relative; top: 0px">
<div style="background: linear-gradient(-45deg, #ddecff 50%, #ffffff 50%); text-align: center; padding-top: 20px; padding-bottom: 20px">
    <img id="donateImg" style="border-radius: 20px; height: auto" src="https://i0.wp.com/www.waysmeetcenter.org/wp-content/uploads/2019/11/donatebutton.png" alt="donate">
</div>

<div id="mission">
    <h2 style="text-align: center;" class="display-5 fw-bold text-uppercase">Why you should donate</h2>
    <p style="padding-right: 10%; padding-left: 10%">Please consider donating if you cannot commit to any classes, as we need all the funds we can get to aid
    our efforts. Any amount that you donate will greatly help us and we will forever be grateful for your contribution.</p>
    <hr class="homepageBreak">
    <h2 style="text-align: center;" class="display-5 fw-bold text-uppercase">How to donate?</h2><br>
    <h5 style="text-align: center; padding-right: 10%; padding-left: 10%"><b>If possible, in the comments of your payment, please type in that you are donating money for Classes56.
            This would make management on our side easier. Thank you!</b></h5>
    <br>
    <ul style="padding-right: 10%; padding-left: 10%">
        <li><b>Venmo: </b>Please send the payment to <b>vipulshah9876</b></li>
        <li><b>Zelle: </b>Please send the payment to <b>darshvshah17@gmail.com</b></li>
    </ul>
</div>
<hr class="homepageBreak">


<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
