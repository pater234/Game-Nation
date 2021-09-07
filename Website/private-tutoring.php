<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>

<style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    #footer {
        margin-top: auto;
    }

    #privateTutoringImg {
        border-radius: 5%;
        width: 90%;
    }

    @media only screen and (min-width: 615px) and (max-width: 750px){
        #privateTutoringImg {
            width: 80%;
        }
    }

    @media only screen and (min-width: 751px) and (max-width: 900px){
        #privateTutoringImg {
            width: 70%;
        }
    }

    @media only screen and (min-width: 901px) and (max-width: 1200px){
        #privateTutoringImg {
            width: 60%;
        }
    }

    @media only screen and (min-width: 1201px) and (max-width: 1500px){
        #privateTutoringImg {
            width: 50%;
        }
    }

    @media only screen and (min-width: 1501px){
        #privateTutoringImg {
            width: 40%;
        }
    }

</style>

<br>
<body class="body" style="position: relative; top: 0px">
    <br>
    <div style="text-align: center">
    <img id="privateTutoringImg" src="https://hbtutoring.com/wp-content/uploads/2020/01/Online-Tutor-1080x675.jpg" alt="Private Tutoring">
    </div>
    <br>
    <div id="Announcement">
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Private Tutoring</h2>
        <p style="padding-right: 10%; padding-left: 10%"> If your child desires to pursue further education in a topic that we do not have a course for, look no further than
            the one-on-one tutoring we offer at Classes56. Our instructors have a wide range of experience in many subjects that we are not
            able to create a course for due to time limitations and other issues. However, we can offer private tutoring in <b>1-hour sessions</b>
            once or twice a week depending on your availability. Keep note that we are flexible and we will do our best to
            accommodate for you. For more information, please email us at <a href="mailto:classes56official@gmail.com">classes56official@gmail.com</a>
            and we can schedule a meeting for us to discuss some finer details with you.
    </div>
    <br>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the pricing of private tutoring?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                The pricing of private tutoring depends on the subject that the classes will focus on and other factors but
                                generally, the pricing is <b>around $10 per class</b>. We do offer sibling discounts!
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Am I able to use the "Sign Up" link to register for private tutoring?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>No, please email us at <a href="mailto:classes56official@gmail.com">classes56official@gmail.com</a> to inquire about private tutoring.</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item shadow mb-3">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Is private tutoring conducted in-person or online?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>The classes will be held online.</strong> This is more convenient for both us and you as you can attend the class from anywhere!
                                We will do our best to make sure the classes are engaging and interactive so that you can learn well.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
