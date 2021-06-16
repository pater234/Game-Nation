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

    #card {
        /*padding-top: 4%;*/
        display: flex;
        flex-wrap: wrap;
        justify-content: space-evenly;
        width: 100%;
        align-content: center;
        margin-bottom: 3%;
    }

    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
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

    .btn {
        background-color: rgba(220, 20, 60, 1);
        transition: all 0.3s ease 0s;
    }

    .btn:hover {
        background-color: rgba(220, 20, 60, 0.5);
    }

    .card-title {
        font-size: 33px;
    }
</style>
<body class="body" style="position: relative; top: 0px">


<div id="card">
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Scratch</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Scratch</p>
            <a class="btn btn-primary"  id="scratchBtn">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="https://lh4.googleusercontent.com/iG45IIL1N3-zSSLPsqz__qEd9nMxNCohpDTMI_M9dfJmB3L9c1y37XGCo60AWrmjZRu-Utcnbw3h0o5eIo71Z3h-7OxgmM8FmidKROc9wLBTtGqMYr0eLWfdJH7s6EFOnAJesTOTT0iy3DRs" alt="Java" class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Java</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Info about Java</p>
            <a class="btn btn-primary" id="javaBtn">View more information</a>
        </div>
    </div>

    <div class="card">
        <img src="/othercontent/ue4.png" alt="Unreal Engine" class="card-img-top" id="ue4">
        <div class="card-body">
            <h1 class="card-title">Game Design in Unreal Engine 4</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about UE4</p>
            <a class="btn btn-primary" id="ue4Btn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh3.googleusercontent.com/Vs0cE-ieN6iLyVX9EI-jS_9xlxkdcZepsU7-9e8PoeIbdnRbpLGcsMNLqO7tDdDeGKPpZ1otT_97vyGZCga8KZz8XtkvdTeUibcmZ-b-QU86GH9mPLEFVaqndE_WMdWV6wiTM3D5EdcF9gCv" alt="Web Design" class="card-img-top" id="webdesign">
        <div class="card-body">
            <h1 class="card-title">Basic Web Design</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about Web Design</p>
            <a class="btn btn-primary" id="webBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Web Design with Flask</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Web Design with Flask</p>
            <a class="btn btn-primary"  id="flaskBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Web Design with Django</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Web Design with Django</p>
            <a class="btn btn-primary"  id="djangoBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Web Design with PHP</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Web Design with PHP</p>
            <a class="btn btn-primary"  id="phpBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/CRE9G0Ektvehxu5A2fKR7O8FONaFntdmQOHJvzaeujlO4tOkMTEC_8DizzAijuRHzQAa6TuSWAGaZPkB17CKqJ3oW7rMSx6qLSyna2MWBPgTSuPK9he-68d5pG0iewp84INh2Py1rMWfvjAo" alt="Python Programming" class="card-img-top">
        <div class="card-body">
        <h1 class="card-title">Python Programming</h1>
        <p class="card-text">$7 per class. $35 for the whole course</p>
        <p class="card-text">Info about Python</p>
        <a class="btn btn-primary" id="pythonBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Coding Principles</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Coding Principles</p>
            <a class="btn btn-primary"  id="codingBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Exploring Our Universe</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Exploring our Universe</p>
            <a class="btn btn-primary"  id="exploringBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">Entrepreneurship</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about Entrepreneurship</p>
            <a class="btn btn-primary"  id="entrepreneurshipBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body">
            <h1 class="card-title">3D Modeling</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about 3D Modeling</p>
            <a class="btn btn-primary"  id="3dBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">PC</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Info about PC stuff</p>
            <a class="btn btn-primary mt-auto" id="wopcBtn">View more information</a>
        </div>
    </div>
</div>

<div id="scratchModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic when it comes to programming. The programming taught in this class will be equal
        to that taught in our Coding Principles class.</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser </p>
    </div>

</div>

<div id="javaModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This Java course will give you an understanding into the basics of Java with simple lessons and well designed projects. At the end of the course,
        students will have the knowledge about syntax and sequence that will allow students the ability to solve many algorithmic problems and potentially
        compete in coding competitions.</p>
        <p><b>Prerequisites: </b>Have a basic knowledge of how to code (i.e. scratch)</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser and a github account for replit.com </p>
    </div>

</div>
<div id="ue4Modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course will give an introduction to <b>Game Design in Unreal Engine 4</b>. Games in Unreal Engine can be coded in C++ or in Unreal's visual scripting system called Blueprints.
            Many people debate on whether it is better to use C++ or blueprints. However, the correct answer is to use both because it makes coding games easier and more efficient.
            We will be using both of them in tandem to code a simple game. You will learn about their strengths and weaknesses and how to gain the most out of them.
            By the end of this course, students will have understood the fundamentals of Unreal Engine and how to use its advantages to code a game in C++ and blueprints.</p>
        <p><b>Prerequisites: </b>Decent knowledge of coding</p>
        <p><b>Requirements:</b> A computer that can download and run Unreal Engine as well as Microsoft Visual Studio.  </p>
    </div>

</div>
<div id="webModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course is an introductory lesson into web design that will teach students how to utilize html and css in a basic way that will allow them to use
            more advanced frameworks later on. <b>Basic Web Design</b> ensures that the student is able to properly utilize the web design principles that will be necessary for them to know no matter what they do afterwards.
        This class is a prerequisite for our other web design classes, but those that have a background in web design will be able to bypass this requirement.</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b>A computer with an ability to run a web browser and a github account</p>
    </div>

</div>

<div id="flaskModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course is an introduction into the popular web framework known as <b>Flask</b>, which is coded in Python. The students in this
        course will utilize higher level programming techniques to make extremely interactive websites. </p>
        <p><b>Prerequisites: </b>Basic Web Design course/understanding of the topics in the web design course</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser </p>
    </div>

</div>
<div id="djangoModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>Django</b> is a popular web development framework coded in python. The students in this
            course will utilize higher level programming techniques to make extremely interactive websites, and also see example websites
            made from the code that they created to make extremely impressive websites that are sure to excite. </p>


    </div>

</div>

<div id="phpModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>PHP</b> is a scripting language that has been increasing in popularity in relation to utilizing python for Web Design backend. Students will
        have an easier time utilizing PHP as compared to Flask and Django, and html is integrated in PHP files.</p>

        <p><b>Prerequisites: </b>Basic Web Design course/understanding of the topics in the web design course</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
    </div>

</div>

<div id="pythonModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course will teach you the basics of python through fun projects and lectures.
            Once complete with the course you will be able to automate simple tasks with python, and make anything you desire.
        Following this course, students will be adept at logically using python, and will be able to think about attending competitions
        related to coding.</p>
        <p><b>Prerequisites: </b>Coding Principles Course/Understanding of the topics discussed in it</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
    </div>

</div>


<div id="codingModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p></p>
    </div>

</div>

<div id="exploringModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>Exploring Our Universe</b> is a class on Physics and Astronomy</p>
    </div>

</div>
<div id="entrepreneurshipModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>In this course, we will learn the basics of Business such as the 5 P's, Finance and many more! We will also learn what techinques companies use to catch the eye of the customers. We will also have a mini-project based on a company which you make yourself!</p>
    </div>

</div>
<div id="3dModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>
            This course will give an introduction to creating sketches and 3d parts in OnShape. You will learn about the different tools and features available.</p>
    </div>

</div>

<div id="pcModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course will teach you the basics of python through fun projects and lectures.
            Once complete with the course you will be able to automate simple tasks with python, and make anything you desire.
            Following this course, students will be adept at logically using python, and will be able to think about attending competitions
            related to coding.</p>
        <p><b>Prerequisites: </b>Coding Principles Course/Understanding of the topics discussed in it</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
    </div>

</div>

</body>
<script>
    var modal1 = document.getElementById("scratchModal");
    var btn1 = document.getElementById("scratchBtn");
    var span1 = document.getElementsByClassName("close")[0];
    var modal2 = document.getElementById("javaModal")
    var btn2 = document.getElementById("javaBtn");
    var span2 = document.getElementsByClassName("close")[1];
    var modal3 = document.getElementById("ue4Modal");
    var btn3 = document.getElementById("ue4Btn");
    var span3 = document.getElementsByClassName("close")[2];
    var modal4 = document.getElementById("webModal");
    var btn4 = document.getElementById("webBtn");
    var span4 = document.getElementsByClassName("close")[3];
    var modal5 = document.getElementById("flaskModal");
    var btn5 = document.getElementById("flaskBtn");
    var span5 = document.getElementsByClassName("close")[4]
    var modal6 = document.getElementById("djangoModal");
    var btn6 = document.getElementById("djangoBtn");
    var span6 = document.getElementsByClassName("close")[5]
    var modal7 = document.getElementById("phpModal");
    var btn7 = document.getElementById("phpBtn");
    var span7 = document.getElementsByClassName("close")[6]
    var modal8 = document.getElementById("pythonModal");
    var btn8 = document.getElementById("pythonBtn");
    var span8 = document.getElementsByClassName("close")[7];
    var modal9 = document.getElementById("codingModal");
    var btn9 = document.getElementById("codingBtn");
    var span9 = document.getElementsByClassName("close")[8]
    var modal10 = document.getElementById("exploringModal");
    var btn10 = document.getElementById("exploringBtn");
    var span10 = document.getElementsByClassName("close")[9]
    var modal11 = document.getElementById("entrepreneurshipModal");
    var btn11 = document.getElementById("entrepreneurshipBtn");
    var span11 = document.getElementsByClassName("close")[10]
    var modal12 = document.getElementById("3dModal");
    var btn12 = document.getElementById("3dBtn");
    var span12 = document.getElementsByClassName("close")[11];
    var modal13 = document.getElementById("pcModal");
    var btn13 = document.getElementById("wopcBtn");
    var span13 = document.getElementsByClassName("close")[12]

    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    btn3.onclick = function() {
        modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }

    btn4.onclick = function() {
        modal4.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
        modal4.style.display = "none";
    }

    btn5.onclick = function() {
        modal5.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
        modal5.style.display = "none";
    }

    btn6.onclick = function() {
        modal6.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span6.onclick = function() {
        modal6.style.display = "none";
    }

    btn7.onclick = function() {
        modal7.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span7.onclick = function() {
        modal7.style.display = "none";
    }

    btn8.onclick = function() {
        modal8.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span8.onclick = function() {
        modal8.style.display = "none";
    }

    btn9.onclick = function() {
        modal9.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span9.onclick = function() {
        modal9.style.display = "none";
    }

    btn10.onclick = function() {
        modal10.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span10.onclick = function() {
        modal10.style.display = "none";
    }

    btn11.onclick = function() {
        modal11.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span11.onclick = function() {
        modal11.style.display = "none";
    }

    btn12.onclick = function() {
        modal12.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span12.onclick = function() {
        modal12.style.display = "none";
    }

    btn13.onclick = function() {
        modal13.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span13.onclick = function() {
        modal13.style.display = "none";
    }


</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>