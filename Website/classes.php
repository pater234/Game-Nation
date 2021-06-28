<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

    body {
        background-color: lightblue;
    }

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

    #ue4Img {
        width: 60%;
        height: auto;
        align-self: center;
    }

    #webdesign {
        width: 80%;
        height: auto;
        align-self: center;
    }

    .btn-view {
        background-color: rgba(220, 20, 60, 1);
        transition: all 0.3s ease 0s;
        outline: none;
        border: none;
    }

    .btn-view:hover {
        background-color: rgba(220, 20, 60, 0.5);
    }

    .card-title {
        font-size: 33px;
    }
    .week {
        text-align: center;
    }
</style>
<body class="body" style="position: relative; top: 0px">
<br>
<h1 class="week">Week of July 5th through July 9th</h1>
<div id="card">
    <div class="card" id="scratch">
        <img src="https://lh4.googleusercontent.com/U09g2Up48XFV18fZN3-Fk0pH6l3HeDiKyh63Zf8ZtA162LhLtElmZkPqT4wa52TFR7XeDv3LbgQG5XMxV8PBj2c9VI1ISHnStqdJVagyBUl1MmsqR9tgoHD1SckjyuEBJcIf9d6z1jWGVr7C" alt="Scratch" height=auto class="card-img-top" style="border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Scratch</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn to code in Scratch with us! Code games, scripts, and more! Learn the basics of coding while having fun!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="scratchBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="web">
        <img src="https://lh3.googleusercontent.com/Vs0cE-ieN6iLyVX9EI-jS_9xlxkdcZepsU7-9e8PoeIbdnRbpLGcsMNLqO7tDdDeGKPpZ1otT_97vyGZCga8KZz8XtkvdTeUibcmZ-b-QU86GH9mPLEFVaqndE_WMdWV6wiTM3D5EdcF9gCv" alt="Web Design" class="card-img-top" id="webdesign" style="width: 50% !important; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Web Design Fundamentals</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn to create amazing webpages in HTML and CSS with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="webBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="coding">
        <img src="https://www.multidots.com/wp-content/uploads/2020/01/code-quality-standard.png?quality=90" alt="Coding" height=auto class="card-img-top" style="width: 90%; align-self: center; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Coding Principles</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn the basics of coding with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="codingBtn">View more information</a>
        </div>
    </div>
    <div class="card" id="exploring">
        <img src="https://www.universetoday.com/wp-content/uploads/2021/04/speckle.jpg" alt="Universe" class="card-img-top" style="align-self: center; width: 80%; height: auto; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Exploring Our Universe</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Explore the vast universe beyond Earth with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="exploringBtn">View more information</a>
        </div>
    </div>
</div>
<br>
<h1 class="week">Week of July 12th through July 16th</h1><br>
<div id="card">
    <div class="card" id="java">
        <img src="https://lh4.googleusercontent.com/iG45IIL1N3-zSSLPsqz__qEd9nMxNCohpDTMI_M9dfJmB3L9c1y37XGCo60AWrmjZRu-Utcnbw3h0o5eIo71Z3h-7OxgmM8FmidKROc9wLBTtGqMYr0eLWfdJH7s6EFOnAJesTOTT0iy3DRs" alt="Java" class="card-img-top">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Java</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn to code in Java with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="javaBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="python">
        <img src="https://lh4.googleusercontent.com/CRE9G0Ektvehxu5A2fKR7O8FONaFntdmQOHJvzaeujlO4tOkMTEC_8DizzAijuRHzQAa6TuSWAGaZPkB17CKqJ3oW7rMSx6qLSyna2MWBPgTSuPK9he-68d5pG0iewp84INh2Py1rMWfvjAo" alt="Python Programming" class="card-img-top">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Python</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn to code in Python to automate your life with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="pythonBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="entrepreneurship">
        <img src="https://www.cs.columbia.edu/wp-content/uploads/2017/03/entrepreneurship-banner.jpg" alt="Scratch" height=auto class="card-img-top" style="border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Entrepreneurship</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn about finances and entrepreneurship with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="entrepreneurshipBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="3d">
        <img src="/othercontent/3dmodeling.png" alt="3DModeling" height=auto class="card-img-top" style="width: 80%; align-self: center; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">3D Modeling</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn to create magnificent 3D models and designs with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="3dBtn">View more information</a>
        </div>
    </div>
</div>
<br>
<h1 class="week">Week of July 19th through July 23rd</h1><br>
<div id="card">
    <div class="card" id="ue4">
        <img src="/othercontent/ue4.png" alt="Unreal Engine" class="card-img-top" id="ue4Img" style="width: 50%; align-self: center">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Game Design in Unreal Engine 4</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Learn to create games in UE4 and C++ with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="ue4Btn">View more information</a>
        </div>
    </div>
    <div class="card" id="flask">
        <img src="data:image/png;base64,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" alt="Flask" height=auto class="card-img-top" style="width: 90%">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Web Design with Flask</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Learn to create an amazing backend for websites in Flask with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="flaskBtn">View more information</a>
        </div>
    </div>
    <div class="card" id="django">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9XeELcp51xMR6GcbG86ssM_CLpG0QqiN9dw&usqp=CAU" alt="Django" height=auto class="card-img-top" style="width: 80% !important; align-self: center; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Web Design with Django</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Learn to create an amazing backend for websites in Django with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="djangoBtn">View more information</a>
        </div>
    </div>
    <div class="card" id="php">
        <img src="https://miro.medium.com/max/4096/1*Y1hq9sHXG26Fyhys81z8rg.png" alt="Scratch" height=20% width=30% class="card-img-top">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Web Design with PHP</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Learn to use PHP scripting for backends of websites with us!</p>
            <a class="btn btn-primary mt-auto btn-view"  id="phpBtn">View more information</a>
        </div>
    </div>
</div>
<br>
<h1 class="week">Week of July 26th through July 30th</h1><br>
<div id="card">
    <div class="card" id="apPhysics">
        <img src="https://debrabell.com/wp-content/uploads/2015/12/AP-Physics1.jpg" alt="AP Physics 1" height=auto class="card-img-top" style="width: 70% !important; align-self: center; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">AP Physics 1 Crash Course</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Prepare for AP Physics 1 with our crash course!</p>
            <a class="btn btn-primary mt-auto btn-view" id="apPhysicsBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="unity">
        <img src="https://unity3d.com/profiles/unity3d/themes/unity/images/pages/branding_trademarks/unity-masterbrand-black.png" alt="Unity" height=auto class="card-img-top" style="width: 70% !important; align-self: center;">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Game Design in Unity</h1>
            <p class="card-text">$7 per class. $35 for the whole course</p>
            <p class="card-text">Learn to create amazing and interactive games in Unity and C# with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="unityBtn">View more information</a>
        </div>
    </div>

    <div class="card" id="iot">
        <img src="https://images.idgesg.net/images/article/2018/10/spinning-globe_smart-city_iot_skyscrapers_city-scape_internet_digital-transformation-100777501-large.jpg" alt="AP Physics 1" height=auto class="card-img-top" style="width: 50% !important; align-self: center; border-radius: inherit">
        <div class="card-body d-flex flex-column">
            <h1 class="card-title">Internet of Things</h1>
            <p class="card-text">$6 per class. $30 for the whole course</p>
            <p class="card-text">Learn about the vast world of the internet and how it all works with us!</p>
            <a class="btn btn-primary mt-auto btn-view" id="iotBtn">View more information</a>
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
        <p>By the end of this course, young aspiring students will learn how to think algorithmically and will understand the basic concepts of coding through scratch.
        This way, when they want to learn a new language, they just have to learn the syntax as they already understand the overarching concepts.</p>
        <p><b>Age Requirements: </b>2nd Grade and up</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser </p>
        <p><b>Timings: </b>July 5th to July 9th at 5:30 P.M. to 6:30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="webModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course is an introductory lesson into web design that will teach students how to utilize HTML and CSS in a basic way that will allow them to use
            more advanced frameworks later on. <b>Web Design Fundamentals</b> ensures that the student is able to properly utilize the web design principles that will be necessary for them to know no matter what they do afterwards.
            This class is a prerequisite for our other web design classes, but those that have a background in web design will be able to bypass this requirement.</p>
        <p>By the end of this course, students will be able to design simple and static webpages using HTML and styling them with color, spacing, and layout with CSS. </p>
        <p><b>Age Requirements: </b>4th Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser and a GitHub account</p>
        <p><b>Timings: </b>July 5th to July 9th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="codingModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>Coding Principles</b> is an introductory class designed to introduce absolute beginners to coding logic and ideas.
            There will be no teaching of languages in this class; rather the people taking the class will be taught using pseudocode and other resources.
            This course can be be followed up with our other basic coding classes, where they will learn languages that will build upon the
            logic learned in this class and put it to practical use.</p>
        <p>By the end of this course, students will be proficient in coding concepts such as lists, arrays, loops and functions which will allow them
            to pick up on new programming languages with greater ease.</p>
        <p><b>Age Requirements: </b>2nd Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser</p>
        <p><b>Timings: </b>July 5th to July 9th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="exploringModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>Exploring Our Universe</b> is a class on Astronomy and Cosmology in which we aim to excite younger kids about the vastness of space and the
        mesmerizing and deadly celestial objects that are present. Students will learn about galaxies, black holes, stars, neutron stars, quasars and many other aspects of the universe</p>
        <p>By the end of this course, we hope that the students leave this course with an interest in science and astronomy. Many of the instructors at Classes56 have been inspired to look
        at STEM related fields because of an early interest in space that piqued their curiosity.</p>
        <p><b>Age Requirements: </b>3rd Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> None (An interest in science!)</p>
        <p><b>Timings: </b>July 5th to July 9th at 5:30 P.M. to 6:30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="javaModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This Java course will give you an understanding into the basics of Java with simple lessons and well designed projects. At the end of the course,
        students will have the knowledge about syntax and sequence that will allow students the ability to solve many algorithmic problems and potentially
        compete in coding competitions.</p>
        <p>By the end of this course, we want students to know how to use a powerful tool such as Java to tackle problems that can be solved by writing code.</p>
        <p><b>Age Requirements: </b>4th Grade and up</p>
        <p><b>Prerequisites: </b>Have a basic knowledge of how to code (i.e. scratch)</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser and a github account for replit.com </p>
        <p><b>Timings: </b>July 12th to July 16th at 3 P.M. to 4 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="pythonModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course will teach you the basics of <b>Python Programming</b> through fun projects and lectures.
            Once complete with the course you will be able to automate simple tasks with python, and make anything you desire.
            Following this course, students will be adept at logically using python, and will be able to think about attending competitions
            related to coding.</p>
        <p>By the end of this course, we want students to have learnt how to apply Python to their lives to automate simple tasks. We also hope that they gain an interest in
        coding that they might wish to pursue in the future. In the 21st century where everything revolves around computers, it is almost essential to be adept at coding in at
        least one language as it is used everywhere.</p>
        <p><b>Age Requirements: </b>3rd Grade and up</p>
        <p><b>Prerequisites: </b>Coding Principles Course/Understanding of the topics discussed in it</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
        <p><b>Timings: </b>July 12th to July 16th at 4:30 P.M. to 5:30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>
</div>

<div id="entrepreneurshipModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>In this course, we will learn the basics of Business such as the 5 P's, Finance and many more! Students will also learn about the planning required
            behind running a success business. We will also learn what techniques companies use to catch the eye of the customers. All of this will allow the
            students to learn how to start their own business, market their products, and potentially learn to make money off of their own hard work.
            We will also have a mini-project on a company which you make yourself!</p>
        <p><b>Age Requirements: </b>3rd Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> A computer with the ability to run a web browser</p>
        <p><b>Timings: </b>July 12th to July 16th at 3 P.M. to 4 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="3dModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>3D Modeling</b> will give an introduction to creating sketches and 3d parts in OnShape. Students will learn about the different tools and features that
            OnShape offers to help them create 3D parts and assemblies. Video Games and Computer Generated Graphics (CGI) in movies always aim to increase the visual quality to make it seem life-like.
        Although we would not be teaching 3D modeling as advanced as that, students will gain an interest in creating models that may lead to a promising career in 3D modeling.</p>
        <p>By the end of this course, students will be able to design basic objects and assemblies in OnShape using the tools provided. A skill such as 3D modeling can never go to waste.</p>
        <p><b>Age Requirements: </b>5th Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> A computer with the ability to run a web browser</p>
        <p><b>Timings: </b>July 12th to July 16th at 4.30 P.M. to 5.30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>
</div>

<div id="ue4Modal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course will give an introduction to <b>Game Design in Unreal Engine 4</b>. Games in Unreal Engine can be coded in C++ or in Unreal's visual scripting system called Blueprints.
            Many people debate on whether it is better to use C++ or blueprints. However, the correct answer is to use both because it makes coding games easier and more efficient.
            We will be using both of them in tandem to code a simple game. You will learn about their strengths and weaknesses and how to gain the most out of them.
        </p>
        <p>By the end of this course, students will have understood the fundamentals of Unreal Engine and how to use its advantages to code a game in C++ and blueprints.
        Coding a game, although is challenging, will allow students to learn new coding concepts and have fun while doing so.</p>
        <p><b>Age Requirements: </b>7th Grade and up</p>
        <p><b>Prerequisites: </b>Coding Principles Course/Understanding of the topics discussed in it </p>
        <p><b>Requirements:</b> A computer that can download and run Unreal Engine 4 as well as Microsoft Visual Studio.</p>
        <p><b>Timings: </b>July 19th to July 23th at 2.30 P.M. to 3.30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>


<div id="flaskModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>This course is an introduction into the popular web framework known as <b>Flask</b>, which is coded in Python. The students in this
        course will utilize higher level programming techniques to make extremely interactive websites. Using flask, students will be able to connect to SQL databases
        and manage webpages to make them interactive with greater efficiency. They will also be able to create HTML templates using Jinja for future use. Flask makes web design easier, scalable, efficient and
        can maintain web applications by providing usable code and extensions for common operations.</p>
        <p>By the end of this course, students will be able to create a fully interactive website that is able to send and receive data from a server. This skill is extremely useful especially in the era where
        everything is online.</p>


        <p><b>Prerequisites: </b>Completion of the Web Design Fundamentals course or intermediate/advanced knowledge of HTML and CSS and understanding of the topics in the web design fundamentals course</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
        <p><b>Timings: </b>July 19th to July 23th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>
<div id="djangoModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>Django</b> is a popular web development framework coded in python. Django helps website builders create pragmatic, maintainable, clean and secure websites.
            Although this has a bit of a steeper learning curve than using Flask, Django allows for more scalability with more features than Flask. For example, the
            spotify web app is built using Django. The students in this course will utilize higher level programming techniques to make extremely interactive websites, and also see example websites
            made from the code that they created to make extremely impressive websites that are sure to excite. </p>
        <p>By the end of this course, students will be able to create a fully interactive website using the Django framework in Python.</p>
        <p><b>Age Requirements: </b>6th Grade and up</p>
        <p><b>Prerequisites: </b>Completion of the Web Design Fundamentals course or intermediate/advanced knowledge of HTML and CSS and understanding of the topics in the web design fundamentals course</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
        <p><b>Timings: </b>July 19th to July 23th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="phpModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>PHP</b> is a backend scripting language that has been increasing in popularity in relation to utilizing python for Web Design. Students will
        have an easier time utilizing PHP as compared to Flask and Django, and html is integrated in PHP files. PHP is quick, cross platform, has pre-written scrips and has amazing
        integration with databases such as MySQL, or MariaDB. For example, Facebook uses PHP as its backend and it is one of the most popular websites that is visited. Around 78.9% of websites in the
        world use PHP as its backend programming language.</p>
        <p>By the end of this course, students will be able to utilize a PHP to create interactive webpages that can manage backend server side processing for
            managing data input in forms, managing accounts, etc.</p>
        <p><b>Age Requirements: </b>6th Grade and up</p>
        <p><b>Prerequisites: </b>Completion of the Web Design Fundamentals course or intermediate/advanced knowledge of HTML and CSS and understanding of the topics in the web design fundamentals course</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser, a GitHub account</p>
        <p><b>Timings: </b>July 19th to July 23th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="apPhysicsModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p><b>AP Physics 1</b> is a class that provides an accelerated, condensed version of the course for those wishing to take the AP Physics
        1 Exam provided by College Board. Concepts will be quickly described to students taking the class, and those that take the course
        will have a full understanding of the basic topics covered in the exam. <b>Please note that this is an extremely condensed version of
        AP Physics 1 and should not be considered a replacement of the course or any self-study materials. This is primarily an introduction crash course
        that will help students earn a 5 along with other materials.</b></p>
        <p><b>Age Requirements: </b>9th Grade and up</p>
        <p><b>Prerequisites: </b>Knowledge of basic principles in physics recommended</p>
        <p><b>Requirements:</b> A computer with an ability to run a web browser</p>
        <p><b>Timings: </b>July 26th to July 30th at 2:30 P.M. to 3:30 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="unityModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>In <b>Game Design with Unity</b> we will learn about Unity is and how we can use it! Unity gives users the ability to create games and experiences in both 2D and 3D.
            There are many games which are created using Unity such as Temple Run, Crossey Road and many more!
            There are two ways which one can run programs in Unity: Code Blocks or with C#. Most games are usually created through C#.
            In this course we will learn how to code in C# and make our games run really smooth</p>
        <p><b>Age Requirements: </b>7th Grade and up</p>
        <p><b>Prerequisites: </b>To know some or little coding. </p>
        <p><b>Requirements:</b> Able to download programs and can run Unity</p>
        <p><b>Timings: </b>July 26th to July 30th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>

<div id="iotModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Have you ever wondered how the internet works? <b>Internet of Things</b> will teach you what makes the internet tick and why it is so important.
            Students will learn how data is transferred over the internet and how they are able to see their favorite websites like YouTube anywhere they have an internet connection.
        They will understand the importance of protocols such as UDP and TCP and what http and https means when they visit a website. Additionally, they will also learn about risks that
        the internet poses to us through viruses and malware. They will learn to recognize different types of malware and how to avoid them.</p>
        <p>By the end of this course, students will have a deeper understanding about the exciting world of the internet and how it functions to serve and help us every single day while remaining
            safe and cautious.</p>
        <p><b>Age Requirements: </b>2nd Grade and up</p>
        <p><b>Prerequisites: </b>None</p>
        <p><b>Requirements:</b> None</p>
        <p><b>Timings: </b>July 26th to July 30th at 4 P.M. to 5 P.M. ET</p>
        <a class="btn btn-outline-primary" href="/signup" role="button">Sign Up Now!</a>
    </div>

</div>


</body>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const modalvar = urlParams.get('modal');
    if (modalvar != null)
    {
        const modalID = modalvar + "Modal";
        var modal = document.getElementById(modalID);
        var ID = document.getElementById(modalvar);
        ID.scrollIntoView();
        modal.style.display = "block";
    }
    var modal1 = document.getElementById("scratchModal");
    var btn1 = document.getElementById("scratchBtn");
    var span1 = document.getElementsByClassName("close")[0];
    var modal2 = document.getElementById("webModal")
    var btn2 = document.getElementById("webBtn");
    var span2 = document.getElementsByClassName("close")[1];
    var modal3 = document.getElementById("codingModal");
    var btn3 = document.getElementById("codingBtn");
    var span3 = document.getElementsByClassName("close")[2];
    var modal4 = document.getElementById("exploringModal");
    var btn4 = document.getElementById("exploringBtn");
    var span4 = document.getElementsByClassName("close")[3];
    var modal5 = document.getElementById("javaModal");
    var btn5 = document.getElementById("javaBtn");
    var span5 = document.getElementsByClassName("close")[4]
    var modal6 = document.getElementById("pythonModal");
    var btn6 = document.getElementById("pythonBtn");
    var span6 = document.getElementsByClassName("close")[5]
    var modal7 = document.getElementById("entrepreneurshipModal");
    var btn7 = document.getElementById("entrepreneurshipBtn");
    var span7 = document.getElementsByClassName("close")[6]
    var modal8 = document.getElementById("3dModal");
    var btn8 = document.getElementById("3dBtn");
    var span8 = document.getElementsByClassName("close")[7];
    var modal9 = document.getElementById("ue4Modal");
    var btn9 = document.getElementById("ue4Btn");
    var span9 = document.getElementsByClassName("close")[8]
    var modal10 = document.getElementById("flaskModal");
    var btn10 = document.getElementById("flaskBtn");
    var span10 = document.getElementsByClassName("close")[9]
    var modal11 = document.getElementById("djangoModal");
    var btn11 = document.getElementById("djangoBtn");
    var span11 = document.getElementsByClassName("close")[10]
    var modal12 = document.getElementById("phpModal");
    var btn12 = document.getElementById("phpBtn");
    var span12 = document.getElementsByClassName("close")[11];
    var modal13 = document.getElementById("apPhysicsModal");
    var btn13 = document.getElementById("apPhysicsBtn");
    var span13 = document.getElementsByClassName("close")[12]
    var modal14 = document.getElementById("unityModal");
    var btn14 = document.getElementById("unityBtn");
    var span14 = document.getElementsByClassName("close")[13]
    var modal15 = document.getElementById("iotModal");
    var btn15 = document.getElementById("iotBtn");
    var span15 = document.getElementsByClassName("close")[14]

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

    btn14.onclick = function() {
        modal14.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span14.onclick = function() {
        modal14.style.display = "none";
    }

    btn15.onclick = function() {
        modal15.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span15.onclick = function() {
        modal15.style.display = "none";
    }

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>