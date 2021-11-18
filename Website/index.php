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
    table {
        width:75%;
        align-content: center;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    table, th, td {

        border: 1px white;
        border-collapse: collapse;
    }
    th, td {
        padding: 15px;
        text-align: center;
    }
    #t01 tr:nth-child(even) {
        background-color: #d64161;
        color: white;
    }
    #t01 tr:nth-child(odd) {
        background-color: #ff7b25;
        color: white;
    }
    #t01 th {
        background-color: #0072b5;
        color: white;
    }

    td a {
        text-decoration: none;
        color: white;
        transition: all 0.3s ease 0s;
    }

    td a:hover {
        color: #3f4455;
    }


    .table-info {
        color: white;
        border: 1px solid black;
    }

    #summerCamp {
        border-radius: 5%;
        width: 90%;
    }

    @media only screen and (min-width: 615px) and (max-width: 750px){
        #summerCamp {
            width: 80%;
        }
    }

    @media only screen and (min-width: 751px) and (max-width: 900px){
        #summerCamp {
            width: 70%;
        }
    }

    @media only screen and (min-width: 901px) and (max-width: 1200px){
        #summerCamp {
            width: 60%;
        }
    }

    @media only screen and (min-width: 1201px) and (max-width: 1500px){
        #summerCamp {
            width: 50%;
        }
    }

    @media only screen and (min-width: 1501px){
        #summerCamp {
            width: 40%;
        }
    }

    .wrapper{
        width: 370px;
        background: #fff;
        border-radius: 5px;
        border: 1px solid lightgrey;
        border-top: 0px;
    }
    .wrapper .title{
        background: #007bff;
        color: #fff;
        font-size: 20px;
        font-weight: 500;
        line-height: 60px;
        text-align: center;
        border-bottom: 1px solid #006fe6;
        border-radius: 5px 5px 0 0;
    }
    .wrapper .form{
        padding: 20px 15px;
        min-height: 400px;
        max-height: 400px;
        overflow-y: auto;
    }
    .wrapper .form .inbox{
        width: 100%;
        display: flex;
        align-items: baseline;
    }
    .wrapper .form .user-inbox{
        justify-content: flex-end;
        margin: 13px 0;
    }
    .wrapper .form .inbox .icon{
        height: 40px;
        width: 40px;
        color: #fff;
        text-align: center;
        line-height: 40px;
        border-radius: 50%;
        font-size: 18px;
        background: #007bff;
    }
    .wrapper .form .inbox .msg-header{
        max-width: 53%;
        margin-left: 10px;
    }
    .form .inbox .msg-header p{
        color: #fff;
        background: #007bff;
        border-radius: 10px;
        padding: 8px 10px;
        font-size: 14px;
        word-break: break-all;
    }
    .form .user-inbox .msg-header p{
        color: #333;
        background: #efefef;
    }
    .wrapper .typing-field{
        display: flex;
        height: 60px;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        background: #efefef;
        border-top: 1px solid #d9d9d9;
        border-radius: 0 0 5px 5px;
    }
    .wrapper .typing-field .input-data{
        height: 40px;
        width: 335px;
        position: relative;
    }
    .wrapper .typing-field .input-data input{
        height: 100%;
        width: 100%;
        outline: none;
        border: 1px solid transparent;
        padding: 0 80px 0 15px;
        border-radius: 3px;
        font-size: 15px;
        background: #fff;
        transition: all 0.3s ease;
    }
    .typing-field .input-data input:focus{
        border-color: rgba(0,123,255,0.8);
    }
    .input-data input::placeholder{
        color: #999999;
        transition: all 0.3s ease;
    }
    .input-data input:focus::placeholder{
        color: #bfbfbf;
    }
    .wrapper .typing-field .input-data button{
        position: absolute;
        right: 5px;
        top: 50%;
        height: 30px;
        width: 65px;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        outline: none;
        opacity: 0;
        pointer-events: none;
        border-radius: 3px;
        background: #007bff;
        border: 1px solid #007bff;
        transform: translateY(-50%);
        transition: all 0.3s ease;
    }
    .wrapper .typing-field .input-data input:valid ~ button{
        opacity: 1;
        pointer-events: auto;
    }
    .typing-field .input-data button:hover{
        background: #006fef;
    }

    .meter {
        align-self: center;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .meter-outside {
        height: 40px;
        width: 500px;
        background-color: #ddecff;
        border-radius: 10px 0 0 10px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .meter-inside {
        height: 30px;
        width: 134.6px;
        background-color: #007bff;
        border-radius: 10px;
        text-align: center;
        margin-left: 5px;
        transition: all 2s;
        display: flex;
        flex-direction: column;
    }

    #meter-current {
        color: #ddecff;
        margin-top: auto;
        margin-bottom: auto;
    }

    .meter-goal-box {
        background-color: #3f4455;
        padding: 15px;
        border-radius: 5px;
    }

    .meter-goal-text {
        color: #ddecff;
        margin-top: auto;
        margin-bottom: auto;
    }

    .meter-tooltip {
        background-color: #333;
        border-radius: 10px;
        color: #b254ff;
        padding: 10px 15px;
        position: relative;
        text-align: center;
        z-index: 999;
        transition: all 2s;
    }

    .meter-tooltip:before {
        content: " ";
        position: absolute;
        bottom: 100%;  /* At the top of the tooltip */
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: transparent transparent #333 transparent;
    }

    .typing-container {
        display: flex;
        justify-content: center;
        align-items: center;

    #feature-text {
        margin-left: 8px;
    }
    .input-cursor {
        display: inline-block;
        width: 2px;
        height: $size;
        background-color: white;
        margin-left: 8px;
        animation: blink .6s linear infinite alternate;
    }
    }

    @keyframes blink {
        0% {opacity: 1;}
        40% {opacity: 1;}
        60% {opacity: 0;}
        100% {opacity: 0;}
    }
    }

    @media only screen and (max-width: 725px) {
        .meter-goal-box {
            background-color: #3f4455;
            padding: 15px;
            border-radius: 5px;
            max-width: 85px;
        }
    }

    @media only screen and (max-width: 630px) and (min-width: 521px) {
        .meter-outside {
            width: 400px;
        }
    }

    @media only screen and (max-width: 521px) and (min-width: 456px) {
        .meter-outside {
            width: 350px;
        }
    }

    @media only screen and (max-width: 455px) and (min-width: 406px) {
        .meter-outside {
            width: 300px;
        }
    }

    @media only screen and (max-width: 405px) and (min-width: 351px) {
        .meter-outside {
            width: 250px;
        }
    }

    @media only screen and (max-width: 350px) {
        .meter-outside {
            width: 200px;
        }
    }

    .homepagePara {
        padding-right: 10%;
        padding-left: 10%;
    }

    @media only screen and (min-width: 700px) and (max-width: 850px) {
        .homepagePara {
            padding-right: 15%;
            padding-left: 15%;
        }
    }

    @media only screen and (min-width: 851px) and (max-width: 1100px) {
        .homepagePara {
            padding-right: 20%;
            padding-left: 20%;
        }
    }

    @media only screen and (min-width: 1101px) {
        .homepagePara {
            padding-right: 22%;
            padding-left: 22%;
        }
    }

    #feedback {
        max-width: 70%;
        left: 15%;
    }

    #quote {
        padding-left: 10%;
        padding-right: 10%;
        padding-top: 5%;
        padding-bottom: 5%;
        background: #ddecff;
        text-decoration: none;
        color: #333333;
        border-radius: 40px;
        text-align: center;
    }

    #quote:hover {
        color: #333333;
    }

    @media only screen and (max-width: 400px) {
        #quote {
            font-size: 15px;
            padding-left: 10%;
            padding-right: 10%;
            padding-top: 10%;
            padding-bottom: 10%;
        }
        #feedback {
            max-width: 90%;
            left: 5%;
        }
    }
    @media only screen and (min-width: 401px) and (max-width: 600px) {
        #quote {
            font-size: 17px;
        }
        #feedback {
            max-width: 85%;
            left: 7.5%;
        }
    }
    @media only screen and (min-width: 601px) and (max-width: 900px) {
        #quote {
            font-size: 20px;
        }
        #feedback {
            max-width: 80%;
            left: 10%;
        }
    }
    @media only screen and (min-width: 901px) and (max-width: 1200px) {
        #quote {
            font-size: 23.5px;
        }
        #feedback {
            max-width: 80%;
            left: 10%;
        }
    }
    @media only screen and (min-width: 1201px) {
        #quote {
            font-size: 25px;
        }
        #feedback {
            max-width: 80%;
            left: 10%;
        }
    }

</style>

<body class="body" style="position: relative; top: 0px">
    <div style="background: linear-gradient(-45deg, #ddecff 50%, #ffffff 50%)">
        <h1 style="text-align: center; padding-top: 50px; padding-bottom: 50px; font-size: 60px; text-decoration: underline; text-decoration-color: #007bff;">Welcome to Classes56!</h1>
    </div>
    <br>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <h2 style="text-align: center; font-family: 'Raleway', sans-serif;">Learn to Master
        <span
                class="txt-rotate"
                data-period="500"
                data-rotate='[ "Coding", "Engineering", "Business"]'></span>
    </h2>
    <h3 style="text-align: center; font-family: 'Raleway', sans-serif;">Classes56 has your back</h3>
    <script>
        var TxtRotate = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };
        TxtRotate.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 300 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('txt-rotate');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-rotate');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtRotate(elements[i], JSON.parse(toRotate), period);
                }
            }
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
            document.body.appendChild(css);
        };
    </script>

    <!--<hr class="homepageBreak">
    <div class="donation-progress">
        <div style="background-color: #ffb400; width: fit-content; left: 50%; position: relative; transform: translate(-50%); padding: 10px; border-radius: 10px" ><h3 style="text-align: center; color: white">Current Donations</h3></div>
        <br style="line-height:1rem">
        <div class="meter">
            <div class="meter-outside">
                <div class="meter-inside">
                    <p id="meter-current">$1316</p>
                </div>
            </div>
            <div class="meter-goal-box">
                <p class="meter-goal-text">Goal: $5000</p>
            </div>
        </div>
        <span class="meter-tooltip">Percentage (Done in JavaScript)</span>
        <br style="line-height:20rem">
        <br style="line-height:20rem">
        <div style="text-align: center"><a class="btn btn-primary"  href="/donate" role="button">Donate Now!</a></div>
    </div>-->

    <hr class="homepageBreak">
    <div id="feedback" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a id="quote" class="d-block w-100 h-40">“My son was very happy with the classes that he attended.
                    He was new to coding, but the expertise of the mentors made it look easy and he was able to grasp
                    all the concepts very easily.”</a>
            </div>
            <div class="carousel-item">
                <a id="quote" class="d-block w-100 h-40">“Overall, we were very impressed with the quality, dedication, and
                    the knowledge of the mentors in the program and wish all the very best for all the future endeavours. We
                    would definitely enroll my son for and future courses to come.”</a>
            </div>
            <div class="carousel-item">
                <a id="quote" class="d-block w-100 h-40">“I definitely learned something but I feel like I also found
                    a new hobby. Something to do while I'm bored.”</a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#feedback" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#feedback" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <div id="mission">
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Our Mission</h2>
        <p class="homepagePara">The pandemic has caused many students to <b>miss out</b> on exciting opportunities to explore their interests. We here at Classes56 strive to give
            them the <b>best educational opportunities</b> to make up for what they have lost and hope that through us, they pick up <b>new interests</b> that will stay with them for the rest of their lives.
            In today's rapidly digitalizing world, coding is an essential skill that is required in many careers and we aim to get the <b>youth ready for their future</b>. Even if you cannot commit to attending our classes, <b>we will accept any donations that you wish to give</b>. Click <a href="/donate">this link</a> to
            donate. Thank you!</p>
    </div>
    <hr class="homepageBreak">

    <div id="overview">
        <div style="text-align: center"><img id="summerCamp" alt="Summer Camp" src="https://www.exploreum.com/wp-content/uploads/2020/11/WinterCamps.jpg"></div>
        <br>
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Winter Camp Overview</h2>
        <p class="homepagePara">
            At Classes56, we are offering a <b>1-week long winter camp (December 27 - December 31)</b> for young children of various ages.
            These classes will be held at the same time through the week from <b>Monday to Friday</b> with <b>hour-long sessions</b>. <b>All classes
            </b> are taught by students that have demonstrated a <b>level of mastery</b> over the subjects that they are teaching.
            <b>Check out our <a href="/classes">View Classes</a></b> page for more information on individual classes including
            timings, content, pricing, age recommendations, and more. These <b>classes will be held
                live, virtually</b> over Google Meet with our apt and experienced instructors paired with <b>small groups of students</b>. Thank you and
            we look forward to providing your children with the best experience of their lives!
        </p>
    </div>
    <hr class="homepageBreak">

<!--    <section id="contactinfo" class="contactinfo">-->
<!--        <div class="contactinformation">-->
<!--            <div class="row text-center">-->
<!--                <h1 class="display-5 fw-bold text-uppercase">Contact Information</h1>-->
<!--                <h1 class="display-7"><b>Contact us by email:</b> </h1>-->
<!--                <ul>-->
<!--                    <li><b>Main business email</b> - <a href="mailto:classes56official@gmail.com">classes56official@gmail.com</a></li>-->
<!--                </ul>-->
<!--                <h1 class="display-7"><b>Phone Number:</b> </h1>-->
<!--                <a href="tel:862-245-2792">‪(862) 245-2792‬</a>-->
<!--                <br>-->
<!--                <h1 class="display-7"><b>Social Media Handles</b></h1>-->
<!--                <ul>-->
<!--                    <li><b>Twitter</b> - <a href="https://twitter.com/classes56">classes56</a></li>-->
<!--                    <li><b>Instagram</b> - <a href="https://www.instagram.com/classes56official/">classes56official</a></li>-->
<!--                    <li><b>YouTube</b> - <a href="https://www.youtube.com/channel/UCot7W_-D9sqeQoj3cMOYBdw">Classes56 Channel</a></li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->

</body>

<script>

    function updateProgressBar()
    {
        var currentDonation = parseInt($('#meter-current').text().slice(1, $('#meter-current').text().length));
        var goal = parseInt($('.meter-goal-text').text().slice(7, $('.meter-goal-text').text().length));
        var outerLength = document.querySelector('.meter-outside').offsetWidth;
        $('.meter-tooltip').html((currentDonation/goal * 100).toFixed(2) + "%");
        $('.meter-inside').css('width', outerLength * (currentDonation/goal));
        var offset = $(".meter-inside").position().left + outerLength * (currentDonation/goal) + 5 - (document.querySelector('.meter-tooltip').offsetWidth)/2;
        $(".meter-tooltip").css('left', offset);
    }

    $(document).ready(function () {return updateProgressBar()});

    $(window).resize(function () {return updateProgressBar()});
</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
