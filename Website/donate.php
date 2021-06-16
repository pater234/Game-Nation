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

    #contactinfo {
        margin-bottom: 3%;
    }
    .btn {
        background-color: rgba(220, 20, 60, 1);
        transition: all 0.3s ease 0s;
    }

    .btn:hover {
        background-color: rgba(220, 20, 60, 0.5);
    }
</style>

<body class="body" style="position: relative; top: 0px">
<div style="background: linear-gradient(-45deg, #ddecff 50%, #ffffff 50%)">
    <h1 style="text-align: center; padding-top: 50px; padding-bottom: 50px; font-size: 60px; text-decoration: underline; text-decoration-color: #007bff;">Please Donate to Classes56</h1>
</div>

<div id="mission">
    <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Why you should donate</h2>
    <p style="padding-right: 10%; padding-left: 10%">Please consider donating if you cannot commit to any classes, as we need all the funds we can get to aid
    our efforts to raise money for the charities we donate to. <a href="https://sewausa.org" target="_blank">This Link</a> will take you to a site where you can donate to our
    cause.</p>
</div>
<hr class="homepageBreak">


<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
