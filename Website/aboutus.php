<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 22rem;
        height: 40rem;
        margin-top: 20px;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 5%;
        padding: 10px 10px 10px 10px;
        transition: all 0.3s ease 0s;
    }

    @media only screen and (min-width: 1000px) and (max-width: 1299px) {
        .card {
            width: 29rem;
            max-width: 29rem;
        }
    }

    @media only screen and (max-width: 480px) and (min-width: 401px){
        .card {
            width: 24rem;
            max-width: 24rem;
        }
    }

    @media only screen and (max-width: 400px) {
        .card {
            width: 21rem;
            max-width: 21rem;
        }
    }

    @media only screen and (min-width: 1300px) {
        .card {
            width: 33rem;
            max-width: 33rem;
        }
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
        <div class="card" id="rishit">
            <div class="card-body card-rish">
                <h1 class="card-title">Rishit</h1>
                <h2 class="card-text">Classes Taught</h2>
                <ul class="list-group" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Coding Principles</li>
                    <li class="list-group-item" style="text-align: center;">Exploring Our Universe</li>
                    <li class="list-group-item" style="text-align: center;">Java</li>
                    <li class="list-group-item" style="text-align: center;">3D Modeling</li>
                    <li class="list-group-item" style="text-align: center;">Game Design in Unreal Engine 4</li>
                    <li class="list-group-item" style="text-align: center;">Web Design in PHP</li>
                    <li class="list-group-item" style="text-align: center;">AP Physics 1 Crash Course</li>
                    <li class="list-group-item" style="text-align: center;">Internet of Things</li>
                </ul>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Studies in the Academy for Mathematics, Science and Engineering</li>
                    <li class="list-group-item" style="text-align: center;">Participated in the TSA Video Game Design with a game created in
                            Unreal Engine 4 with C++</li>
                    <li class="list-group-item" style="text-align: center;">Taking an Academy CAD Honors course in the AMSE</li>
                    <li class="list-group-item" style="text-align: center;">Takes AP Physics 1, participates in the Modern Physics Club
                            and went to the Quarknet Masterclass presented by Rutgers and Fermilab</li>
                    <li class="list-group-item" style="text-align: center;">Self studied Java, C++, Python and Web Design through the Internet and other
                            courses and classes from reputable organizations</li>
                    <li class="list-group-item" style="text-align: center;">Currently taking the Unreal Multiplayer Master: Video Game Dev in C++ course</li>
                    <li class="list-group-item" style="text-align: center;">Volunteers for homework help monthly</li>
                    <li class="list-group-item" style="text-align: center;">Placed 24th nationally in the Engineering MySo Science Olympiad</li>
                </ul>
            </div>
        </div>
        <div class="card" id="prathamesh">
            <div class="card-body card-prath">
                <h1 class="card-title">Prathamesh</h1>
                <h2 class="card-text">Classes Taught</h2>
                <ul class="list-group" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Coding Principles</li>
                    <li class="list-group-item" style="text-align: center;">Exploring Our Universe</li>
                    <li class="list-group-item" style="text-align: center;">Java</li>
                    <li class="list-group-item" style="text-align: center;">3D Modeling</li>
                    <li class="list-group-item" style="text-align: center;">Entrepreneurship</li>
                    <li class="list-group-item" style="text-align: center;">Web Design with Django</li>
                    <li class="list-group-item" style="text-align: center;">AP Physics 1 Crash Course</li>
                    <li class="list-group-item" style="text-align: center;">Internet of Things</li>
                </ul>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Studies in the Academy for Mathematics, Science and Engineering</li>
                    <li class="list-group-item" style="text-align: center;">Currently taking a college course in marketing and
                            States Qualifier in DECA</li>
                    <li class="list-group-item" style="text-align: center;">Taking an Academy CAD Honors course in the AMSE</li>
                    <li class="list-group-item" style="text-align: center;">Taking AP Physics 1 and participates in Modern Physics Club
                            and went to Quarknet Masterclass presented by Rutgers and Fermilab</li>
                    <li class="list-group-item" style="text-align: center;">Self studied Java through the internet, along with other
                            classes from reputable organizations</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple python courses, including some on machine
                            learning (IBM, Pluralsight, etc.)</li>
                    <li class="list-group-item" style="text-align: center;">Taught at a Summer course for elementary school children</li>
                    <li class="list-group-item" style="text-align: center;">Volunteers for homework help monthly</li>
                    <li class="list-group-item" style="text-align: center;">Placed 13th nationally in the Structures MySo Science Olympiad</li>
                </ul>
            </div>
        </div>
        <div class="card" id="darsh">
            <div class="card-body card-darsh">
                <h1 class="card-title">Darsh</h1>
                <h2 class="card-text">Classes Taught</h2>
                <ul class="list-group" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Scratch</li>
                    <li class="list-group-item" style="text-align: center;">Basic Web Design</li>
                    <li class="list-group-item" style="text-align: center;">Exploring Our Universe</li>
                    <li class="list-group-item" style="text-align: center;">Python Programming</li>
                    <li class="list-group-item" style="text-align: center;">Web Design with Flask</li>
                    <li class="list-group-item" style="text-align: center;">Internet of Things</li>
                </ul>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Studies in the Morris Hills Magnet Program for Math and Science</li>
                    <li class="list-group-item" style="text-align: center;">Completed Harvard's CS50 Introduction to Computer
                        Science course which included C, Python, web design, and more</li>
                    <li class="list-group-item" style="text-align: center;">Received a <a href="https://drive.google.com/file/d/1-0T0QwBHEQsQxGmyad0tBXczlfdHfHIr/view">verified certificate</a> for the completion of the Course</li>
                    <li class="list-group-item" style="text-align: center;">Is part of a team that placed 3rd statewide in the Physics Olympics and attended a
                        Quarknet Masterclass provided by Rutgers and Fermilab</li>
                    <li class="list-group-item" style="text-align: center;">Python Programming</li>
                    <li class="list-group-item" style="text-align: center;">Completed a Machine Learning course in Python provided by IBM</li>
                    <li class="list-group-item" style="text-align: center;">Volunteers for homework help monthly</li>
                    <li class="list-group-item" style="text-align: center;">Placed 19th nationally in the Engineering MySo Science Olympiad</li>
                </ul>
            </div>
        </div>
        <div class="card" id="shreyas">
            <div class="card-body card-shrey">
                <h1 class="card-title">Shreyas</h1>
                <h2 class="card-text">Classes Taught</h2>
                <ul class="list-group" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Scratch</li>
                    <li class="list-group-item" style="text-align: center;">Entrepreneurship</li>
                    <li class="list-group-item" style="text-align: center;">Game Design in Unity</li>
                </ul>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Studies in the Academy of Finance and Supply Chain Management</li>
                    <li class="list-group-item" style="text-align: center;">Learning Logistics in Supply Chain Management</li>
                    <li class="list-group-item" style="text-align: center;">Learnt Business Management, Marketing, Entrepreneurship and International Business in Business course</li>
                    <li class="list-group-item" style="text-align: center;">Self-Learnt Unity through the Internet</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple Java courses on how to build applications and how to build websites.</li>
                    <li class="list-group-item" style="text-align: center;">Doing Unity Advanced course from Unity</li>
                    <li class="list-group-item" style="text-align: center;">Competing member in DECA</li>
                    <li class="list-group-item" style="text-align: center;">Taught at a Summer course for elementary school children</li>
                    <li class="list-group-item" style="text-align: center;">Volunteers for homework help monthly</li>
                </ul>
            </div>
        </div>
    </div>
</body>

<script>
    var heightStr1 =  $(".card-rish").css('height');
    $("#rishit").css('height', heightStr1);

    var heightStr2 =  $(".card-prath").css('height');
    $("#prathamesh").css('height', heightStr2);

    var heightStr3 =  $(".card-darsh").css('height');
    $("#darsh").css('height', heightStr3);

    var heightStr4 =  $(".card-shrey").css('height');
    $("#shreyas").css('height', heightStr4);

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
