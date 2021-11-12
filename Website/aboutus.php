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

    #teachers {
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
        <div class="card card-big" id="rishit">
            <div class="card-body card-rish infoCard">
                <h1 class="card-title">Rishit</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Rishit.jpeg" alt="Rishit Profile Picture" style="width: 150%; margin-left: -40px; margin-top: -40px">
                </div>
                <br>
                <h5 class="card-text">Hello, everyone! My name is Rishit Arora and I am interested in AI, Engineering, Electricity and Physics. I am involved in a lot of STEM clubs in my school In my free time, I play badminton, play the piano and enjoy spending time with my friends.
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
        <div class="card card-big" id="prathamesh">
            <div class="card-body card-prath infoCard">
                <h1 class="card-title">Prathamesh</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Prathamesh.jpeg" alt="Prathamesh Profile Picture" style="width: 165%; margin-left: -50px; margin-top: -80px">
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
        <div class="card card-big" id="darsh">
            <div class="card-body card-darsh infoCard">
                <h1 class="card-title">Darsh</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Darsh.jpeg" alt="Darsh Profile Picture" style="width: 157%; margin-left: -53px; margin-top: -45px">
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
    </div>
    <h1 style="text-align: center">Meet The Teachers</h1>
    <br>
    <div id="teachers">
        <div class="card card-big" id="shreyas">
            <div class="card-body card-shrey infoCard">
                <h1 class="card-title">Shreyas</h1>
                <div class="circular--landscape">
                    <img src="othercontent/Shreyas.jpeg" alt="Shreyas Profile Picture" style="width: 180%; margin-left: -88px; margin-top: -80px">
                </div>
                <br>
                <h5 class="card-text">Hello there! My name is Shreyas and I am a sophomore in MCVTS. I am interested in Data Sciences, Marketing, and Economics. In my spare time, I like to read, play video games, soccer, and football!</h5>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student in the Academy of Finance and Supply Chain Management</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple Java courses on how to build applications and how to build websites. Self-Learnt C#, Unity and Python as well.  Right now I am learning from EDX.</li>
                    <li class="list-group-item" style="text-align: center;">Competing member in DECA</li>
                </ul>
            </div>
        </div>
        <div class="card card-big" id="vanij">
            <div class="card-body card-vanij infoCard">
                <h1 class="card-title">Vanij</h1>
                <div class="circular--landscape">
                    <img src="othercontent/vanij.png" alt="Vanij Profile Picture" style="width: 100%; margin-left: 0; margin-top: -5px">
                </div>
                <br>
                <h5 class="card-text">Hello there! My name is Vanij and I am a sophomore in Parsippany Hills High School. I like Cheesecake and I love Cheesecake. In my free time, I cheese my cake.</h5>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student at Parsippany Hills High School</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple Java courses on how to build applications and how to build websites. Self-Learnt C#, Unity and Python as well.  Right now I am learning from EDX.</li>
                    <li class="list-group-item" style="text-align: center;">Competing member in DECA</li>
                </ul>
            </div>
        </div>
        <div class="card card-big" id="reva">
            <div class="card-body card-reva infoCard">
                <h1 class="card-title">Reva</h1>
                <div class="circular--landscape">
                    <img src="othercontent/reva.png" alt="Vanij Profile Picture" style="width: 110%; margin-left: -2px; margin-top: 0px">
                </div>
                <br>
                <h5 class="card-text">Hello there! My name is Reva and I am a sophomore in Parsippany Hills High School. We are cheese</h5>
                <ul class="list-group list-group-flush" style="text-align: left;">
                    <li class="list-group-item" style="text-align: center;">Student at Parsippany Hills High School</li>
                    <li class="list-group-item" style="text-align: center;">Took multiple Java courses on how to build applications and how to build websites. Self-Learnt C#, Unity and Python as well.  Right now I am learning from EDX.</li>
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

    var heightStr5 =  $(".card-vanij").css('height');
    $("#vanij").css('height', heightStr5);

    var heightStr6 =  $(".card-reva").css('height');
    $("#reva").css('height', heightStr5);

    /*var infoCards = document.querySelectorAll("div.infoCard");
    var cardBigs = document.querySelectorAll("div.card-big");
    var lengths = [];
    for (i = 0; i < infoCards.length; ++i)
    {
        lengths.push(window.getComputedStyle(infoCards[i]).height);
    }
    for (i = 0; i < cardBigs.length; ++i)
    {
        cardBigs[i].addEventListener('updateSize', function (){
            this.style.height = lengths[i];
        })
    }*/

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
