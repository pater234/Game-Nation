<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 22rem;
        height: 29rem;
        margin-top: 20px;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5%;
        padding: 10px 10px 10px 10px;
        transition: all 0.3s ease 0s;
    }

    .informationaboutus {
        /*padding-top: 4%;*/
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        align-content: center;
        padding-bottom: 3%;
    }

    .aboutusheader {
        text-align: center;
        background-color: #007bff;
        padding-bottom: 5px;
    }

    .aboutusheader h1 {

        font-family: Montserrat, sans-serif;
        color: white;
    }

</style>

<body class="body" style="position: relative; top: 0px">
    <div class="aboutusheader">
        <img src="othercontent/Logo.png">
        <h1>Classes56</h1>
        <h1>About Us</h1>
    </div>
    <div class="informationaboutus">
        <div id="Rishit">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Rishit</h1>
                    <h2 class="card-text">Classes Taught</h2>
                    <p class="card-text">Python and Java</p>
                    <h2 class="card-text">Qualifications</h2>
                    <p class="card-text">Everything, he is a god</p>
                </div>
            </div>
        </div>
        <div id="Prathamesh">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Prathamesh</h1>
                    <h2 class="card-text">Classes Taught</h2>
                    <p class="card-text">Python and Java</p>
                    <h2 class="card-text">Qualifications</h2>
                    <p class="card-text">None, ie. noob</p>
                </div>
            </div>
        </div>
        <div id="Darsh">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Darsh</h1>
                    <h2 class="card-text">Classes Taught</h2>
                    <p class="card-text">Python and Java</p>
                    <h2 class="card-text">Qualifications</h2>
                    <p class="card-text">None, ie. noob</p>
                </div>
            </div>
        </div>
        <div id="Shreyas">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Shreyas</h1>
                    <h2 class="card-text">Classes Taught</h2>
                    <p class="card-text">Python and Java</p>
                    <h2 class="card-text">Qualifications</h2>
                    <p class="card-text">None, ie. noob</p>
                </div>
            </div>
        </div>
    </div>
</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
