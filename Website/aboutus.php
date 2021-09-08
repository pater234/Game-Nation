<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
        background-color: lightblue;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        width: 22rem;
        height: 40rem;
        margin-top: 20px;
        text-align: center;
        font-family: "Montserrat", sans-serif;
        background-color: rgba(255, 255, 255, 1);
        border-radius: 40px;
        padding: 10px 10px 10px 10px;
        transition: all 0.3s ease 0s;
    }

    @media only screen and (min-width: 1000px) and (max-width: 1299px) {
        .card {
            width: 24rem;
            max-width: 24rem;
        }
    }

    @media only screen and (max-width: 480px) and (min-width: 401px){
        .card {
            width: 21rem;
            max-width: 24rem;
        }
    }

    @media only screen and (max-width: 400px) {
        .card {
            width: 20rem;
            max-width: 21rem;
        }
    }

    @media only screen and (min-width: 1300px) {
        .card {
            width: 25rem;
            max-width: 25rem;
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

    .circular--landscape {
        display: inline-block;
        position: relative;
        width: 200px;
        height: 200px;
        overflow: hidden;
        border-radius: 50%;
    }

</style>

<body class="body" style="position: relative; top: 0px">
    <div class="aboutusheader">
        <img src="othercontent/Logo.png">
        <h1>Classes56</h1>
        <h1>About Us</h1>
    </div>
    <br>
    <h1 style="text-align: center">Meet The Founders</h1>
    <div class="informationaboutus">
        <div class="card" id="rishit">
            <div class="card-body card-rish">
                <h1 class="card-title">Rishit</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Rishit.jpeg" alt="Rishit Profile Picture" style="width: 150%; margin-left: -40px; margin-top: -40px">
                </div>
                <br>
                <h5 class="card-text">I am interested in AI and Machine Learning. In my free time, I play badminton, play the piano and enjoy spending time with my friends.
                I love Marvel, Star Wars and I hope to have a fountain pen collection in the future!</h5>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student in the Academy for Mathematics, Science and Engineering</li>
                    <li class="list-group-item" style="text-align: center;">Received a 5 on the AP Physics and the AP Computer Science Principles Exams</li>
                    <li class="list-group-item" style="text-align: center;">Placed 24th nationally in the Engineering MySo Science Olympiad</li>
                    <li class="list-group-item" style="text-align: center;">Self studied Java, C++, Python, Machine Learning and Web Design through the Internet and other
                        courses and classes from reputable organizations</li>
                </ul>
            </div>
        </div>
        <div class="card" id="prathamesh">
            <div class="card-body card-prath">
                <h1 class="card-title">Prathamesh</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Prathamesh.jpeg" alt="Rishit Profile Picture" style="width: 165%; margin-left: -50px; margin-top: -80px">
                </div>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student in the Academy for Mathematics, Science and Engineering</li>
                    <li class="list-group-item" style="text-align: center;">Currently taking a college course in marketing and
                            States Qualifier in DECA</li>
                    <li class="list-group-item" style="text-align: center;">Received a 5 on the AP Physics and the AP Computer Science Principles Exams</li>
                    <li class="list-group-item" style="text-align: center;">Self studied Java, Python and Machine Learning through the internet, along with other
                            classes from reputable organizations</li>
                    <li class="list-group-item" style="text-align: center;">Placed 13th nationally in the Structures MySo Science Olympiad</li>
                </ul>
            </div>
        </div>
        <div class="card" id="darsh">
            <div class="card-body card-darsh">
                <h1 class="card-title">Darsh</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Darsh.jpeg" alt="Rishit Profile Picture" style="width: 157%; margin-left: -53px; margin-top: -45px">
                </div>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student in the Morris Hills Magnet Program for Math and Science</li>
                    <li class="list-group-item" style="text-align: center;">Received a <a href="https://drive.google.com/file/d/1-0T0QwBHEQsQxGmyad0tBXczlfdHfHIr/view">verified certificate</a>
                        for completing Harvard's CS50 Introduction to Computer Science course which included C, Python, web design, and more</li>
                    <li class="list-group-item" style="text-align: center;">Received a 5 on the AP Computer Science Principles Exam</li>
                    <li class="list-group-item" style="text-align: center;">A gold and bronze medalist in the Academic Decathlon regional competition</li>
                    <li class="list-group-item" style="text-align: center;">Placed 19th nationally in the Engineering MySo Science Olympiad</li>
                </ul>
            </div>
        </div>
        <div class="card" id="shreyas">
            <div class="card-body card-shrey">
                <h1 class="card-title">Shreyas</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Shreyas.jpeg" alt="Rishit Profile Picture" style="width: 180%; margin-left: -88px; margin-top: -80px">
                </div>
                <br>
                <h2 class="card-text">Qualifications</h2>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Studies in the Academy of Finance and Supply Chain Management</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple Java courses on how to build applications and how to build websites.</li>
                    <li class="list-group-item" style="text-align: center;">Competing member in DECA</li>
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
