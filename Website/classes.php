<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>


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

    #cardbutton {
        background-color: rgba(220, 20, 60, 1);
        transition: all 0.3s ease 0s;
    }

    #cardbutton:hover {
        background-color: rgba(220, 20, 60, 0.5);
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

</style>
<body>


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
            <h1 class="card-title">Web Design</h1>
            <p class="card-text">$8 per class. $48 for the whole course</p>
            <p class="card-text">Info about Web Design</p>
            <a class="btn btn-primary" id="webBtn">View more information</a>
        </div>
    </div>
    <div class="card">
        <img src="https://lh4.googleusercontent.com/CRE9G0Ektvehxu5A2fKR7O8FONaFntdmQOHJvzaeujlO4tOkMTEC_8DizzAijuRHzQAa6TuSWAGaZPkB17CKqJ3oW7rMSx6qLSyna2MWBPgTSuPK9he-68d5pG0iewp84INh2Py1rMWfvjAo" alt="Python Programming" class="card-img-top">
        <div class="card-body">
        <h1 class="card-title">Python Programming</h1>
        <p class="card-text">$7 per class. $35 for the whole course</p>
        <p class="card-text">Info about Java</p>
        <a class="btn btn-primary" id="pythonBtn">View more information</a>
        </div>
    </div>
</div>

<div id="scratchModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic</p>
    </div>

</div>
<div id="javaModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic</p>
    </div>

</div>
<div id="ue4Modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic</p>
    </div>

</div>
<div id="webModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic</p>
    </div>

</div>
<div id="pythonModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <p>Scratch is a class designed to be an introductory course into coding logic. Students will <u>not</u> learn a language
            that will be beneficial to them in the future. Rather, they will be introduced to programming in a fun and interactive way. This class
            is not recommended for those that already have a sense of logic</p>
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
    var modal5 = document.getElementById("pythonModal");
    var btn5 = document.getElementById("pythonBtn");
    var span5 = document.getElementsByClassName("close")[4];
    btn1.onclick = function() {
        modal1.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span1.onclick = function() {
        modal1.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = "none";
        }
    }
    btn2.onclick = function() {
        modal2.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span2.onclick = function() {
        modal2.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal2) {
            modal2.style.display = "none";
        }
    }
    btn3.onclick = function() {
        modal3.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span3.onclick = function() {
        modal3.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal3) {
            modal3.style.display = "none";
        }
    }
    btn4.onclick = function() {
        modal4.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span4.onclick = function() {
        modal4.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal4) {
            modal4.style.display = "none";
        }
    }
    btn5.onclick = function() {
        modal5.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span5.onclick = function() {
        modal5.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal5) {
            modal5.style.display = "none";
        }
    }

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>