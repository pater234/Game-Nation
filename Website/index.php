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

</style>

<body class="body" style="position: relative; top: 0px">
    <div style="background: linear-gradient(-45deg, #ddecff 50%, #ffffff 50%)">
        <h1 style="text-align: center; padding-top: 50px; padding-bottom: 50px; font-size: 60px; text-decoration: underline; text-decoration-color: #007bff;">Welcome to Classes56!</h1>
    </div>
    <br>
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
    </div>

    <hr class="homepageBreak">

    <div id="mission">
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Our Mission</h2>
        <p style="padding-right: 10%; padding-left: 10%">The pandemic has caused many students to <b>miss out</b> on exciting opportunities to explore their interests. We here at Classes56 strive to give
            them the <b>best educational opportunities</b> to make up for what they have lost and hope that through us, they pick up <b>new interests</b> that will stay with them for the rest of their lives.
            In today's rapidly digitalizing world, coding is an essential skill that is required in many careers and we aim to get the <b>youth ready for their future</b>.
            To avoid cheapening and monetizing the quality of the classes that we deliver, <b>all proceeds we collect will go towards charity</b>, local
            and international. Our current focus is aiding the 501(c) Nonprofit <a href="https://sewausa.org" target="_blank" rel="noreferrer noopener">Sewa International</a>, an organization dedicated towards serving humanity in distress.
            Even if you cannot commit to attending our classes, <b>we will accept any donations that you wish to give</b>. Click <a href="/donate">this link</a> to
            donate. Thank you!</p>
    </div>
    <hr class="homepageBreak">

    <div id="overview">
        <div style="text-align: center"><img id="summerCamp" alt="Summer Camp" src="https://cdn.cdnparenting.com/articles/2019/04/01163339/Summer-Camp-for-Kids-519357010.jpg"></div>
        <br>
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Summer Camp Overview</h2>
        <p style="padding-right: 10%; padding-left: 10%;">
            At Classes56, we are offering <b>1-week summer camps</b> for young children of various ages.
            These classes will be held at the same time through the week from <b>Monday to Friday</b> with <b>hour-long sessions</b>. <b>All classes
            </b> are taught by volunteers that have demonstrated <b>some level of mastery</b> over the subjects that they are teaching.
            <b>Check out our <a href="/classes">View Classes</a></b> page for more information on individual classes including
            timings, content, pricing, age recommendations, and more. These <b>classes will be held
                live, virtually</b> over Google Meet with our apt and experienced instructors paired with <b>small groups of students</b>.
            Remember, that <b>ALL funds that we collect will go to charity.</b> Thank you and
            we look forward to providing your children with the best experience of their lives!
        </p>
    </div>
    <hr class="homepageBreak">







    <!--<section id="tabletop" class="contactinfo">
        <div id="table">
            <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Age Recommendations</h2>
            <div class="row text-center">
                <p class="lead">Click on the class name to be redirected to the information for the specific class</p>
            </div>
            <table class="center" id="t01">
                <tr>
                    <th class="table-info">Age</th>
                    <th class="table-info">Classes Available</th>
                </tr>
                <tr>
                    <td class="table-info">2nd Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=coding">Coding Principles</a>, <a href="/classes?modal=scratch">Scratch</a>, <a href="/classes?modal=iot">Internet of Things</a></td>
                </tr>
                <tr>
                    <td class="table-info">3rd Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=exploring">Exploring the Universe</a>, <a href="/classes?modal=entrepreneurship">Entrepreneurship</a>, <a href="/classes?modal=python">Python</a></td>
                </tr>
                <tr>
                    <td class="table-info">4th Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=web">Web Design Fundamentals</a>, <a href="/classes?modal=java">Java</a></td>
                </tr>
                <tr>
                    <td class="table-info">5th Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=3d">3D Modeling</a></td>
                </tr>
                <tr>
                    <td class="table-info">6th Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=flask">Flask</a>, <a href="/classes?modal=django">Django</a>, <a href="/classes?modal=php">PHP</a></td>
                </tr>
                <tr>
                    <td class="table-info">7th Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=ue4">Unreal Engine 4</a>, <a href="/classes?modal=unity">Unity</a></td>
                </tr>

                <tr>
                    <td class="table-info">9th Grade and up</td>
                    <td class="table-info"><a href="/classes?modal=apPhysics">AP Physics 1 Crash Course</a></td>
                </tr>
            </table>
        </div>
    </section>
    <hr class="homepageBreak">-->
    <section id="contactinfo" class="contactinfo">
        <div class="contactinformation">
            <div class="row text-center">
                <h1 class="display-5 fw-bold text-uppercase">Contact Information</h1>
                <h1 class="display-7"><b>Contact us by email:</b> </h1>
                <ul>
                    <li><b>Main business email</b> - <a href="mailto:classes56official@gmail.com">classes56official@gmail.com</a></li>
                </ul>
                <h1 class="display-7"><b>Call us:</b> </h1>
                <b>Phone Number</b> - <a href="tel:862-245-2792">‪(862) 245-2792‬</a>

                <h1 class="display-7"><b>Social Media Handles</b></h1>
                <ul>
                    <li><b>Facebook</b> - Coming Soon!</li>
                    <li><b>Instagram</b> - Coming Soon!</li>
                    <li><b>YouTube</b> - <a href="https://www.youtube.com/channel/UCot7W_-D9sqeQoj3cMOYBdw">Classes56 Channel</a></li>
                </ul>
            </div>
        </div>
    </section>
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
