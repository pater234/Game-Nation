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

    .aboutusheader {

    }

    .aboutusheader h1 {
        font-family: Montserrat, sans-serif;

    }

</style>

<body>
    <div class="aboutusheader">
        <img src="Logo.png">
        <h1>Classes56</h1>
        <h1>About Us</h1>
    </div>
    <div class="informationaboutus">
        <div id="Rishit">

        </div>
        <div id="Prathamesh">

        </div>
        <div id="Darsh">

        </div>
        <div id="Shreyas">

        </div>
    </div>
</body>

<div id="card">
    <div class="card">
        <div class="card-body">
            <h1 class="card-title">Prathamesh</h1>
            <h2 class="card-text">Classes Taught</h2>
            <p class="card-text">Python and Java</p>
            <h2 class="card-text">Qualifications</h2>
            <p class="card-text">Takes Python</p>
        </div>
    </div>
</div>
<?php include "footer.php"?>


