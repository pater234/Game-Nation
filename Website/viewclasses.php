<?php include "layout.php" ?>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 25rem;
        height: 30rem;
        margin-top: 20px;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5%;
        padding: 10px 10px 10px 10px;
        transition: all 0.3s ease 0s;
    }

    #card {
        /*padding-top: 4%;*/
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        align-content: center;
    }

    body {
        background-image: url("https://www.parentmap.com/sites/default/files/styles/1180x660_scaled_cropped/public/2018-09/iStock-612659828.jpg?itok=MhLCDK7N");
        background-size: 100%;
        background-blend-mode: color-burn;
    }

    #cardbutton {
        background-color: rgba(220, 20, 60, 1);
        transition: all 0.3s ease 0s;
    }

    #cardbutton:hover {
        background-color: rgba(220, 20, 60, 0.5);
    }

    #ue4 {
        width: 60%;
        height: auto;
        align-self: center;
    }

    #webdesign {
        width: 80%;
        height: auto;
        align-self: center;
    }

</style>

<div id="card">
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Scratch</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Scratch</p>
            <a class="btn btn-primary" id="cardbutton" href="scratch">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="https://lh4.googleusercontent.com/iG45IIL1N3-zSSLPsqz__qEd9nMxNCohpDTMI_M9dfJmB3L9c1y37XGCo60AWrmjZRu-Utcnbw3h0o5eIo71Z3h-7OxgmM8FmidKROc9wLBTtGqMYr0eLWfdJH7s6EFOnAJesTOTT0iy3DRs" alt="Java" class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Java</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Info about Java</p>
            <a class="btn btn-primary" id="cardbutton" href="java">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="ue4.png" alt="Unreal Engine" class="card-img-top" id="ue4">
        <div class="card-body">
            <h1 class="card-title">Game Design in Unreal Engine 4</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about UE4</p>
            <a class="btn btn-primary" id="cardbutton" href="ue4">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh3.googleusercontent.com/Vs0cE-ieN6iLyVX9EI-jS_9xlxkdcZepsU7-9e8PoeIbdnRbpLGcsMNLqO7tDdDeGKPpZ1otT_97vyGZCga8KZz8XtkvdTeUibcmZ-b-QU86GH9mPLEFVaqndE_WMdWV6wiTM3D5EdcF9gCv" alt="Web Design" class="card-img-top" id="webdesign">
        <div class="card-body">
            <h1 class="card-title">Web Design</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about Web Design</p>
            <a class="btn btn-primary" id="cardbutton" href="webdesign">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/CRE9G0Ektvehxu5A2fKR7O8FONaFntdmQOHJvzaeujlO4tOkMTEC_8DizzAijuRHzQAa6TuSWAGaZPkB17CKqJ3oW7rMSx6qLSyna2MWBPgTSuPK9he-68d5pG0iewp84INh2Py1rMWfvjAo" alt="Python Programming" class="card-img-top">
        <div class="card-body">
        <h1 class="card-title">Python Programming</h1>
        <p class="card-text">$7 per class. $35 for the whole course</p>
        <p class="card-text">Info about Java</p>
        <a class="btn btn-primary" id="cardbutton" href="python">View more information</a>
        </div>
    </div>
</div>

<!--<button onclick="color(); return false;">
    Change Color
</button>-->

<script>
    function color()
    {
        document.querySelector('.card').style.color = "red";
    }
</script>