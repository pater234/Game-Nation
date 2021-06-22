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
</style>

<body class="body" style="position: relative; top: 0px">
    <div style="background: linear-gradient(-45deg, #ddecff 50%, #ffffff 50%)">
        <h1 style="text-align: center; padding-top: 50px; padding-bottom: 50px; font-size: 60px; text-decoration: underline; text-decoration-color: #007bff;">Welcome to Classes56!</h1>
    </div>

    <div id="mission">
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Our Mission</h2>
        <p style="padding-right: 10%; padding-left: 10%">The pandemic has caused many students to <b>miss out</b> on exciting opportunities to explore their interests. We here at Classes56 strive to give
            them the <b>best education</b> to make up for what they have lost and hope that through us, they pick up <b>new interests</b> that will stay with them for the rest of their life.
            In today's rapidly digitalizing world, coding is an essential skill that is required in many careers and we aim to get the <b>youth ready for their future</b>.
            To avoid cheapening and monetizing the quality of the classes that we deliver, <b>all proceeds we collect will go towards charity</b>, local
            and international. Even if you cannot commit to attending our classes, <b>we will accept any donations that you wish to give</b>. Click <a href="/donate">this link</a> to
            donate. Thank you!</p>
    </div>
    <hr class="homepageBreak">
    <div id="overview">
        <h2 style="text-align: center;" class="display-3 fw-bold text-uppercase">Overview (Regular Classes)</h2>
        <p style="padding-right: 10%; padding-left: 10%;">
            At Classes56, we are offering <b>1-week summer camps</b> for young children of various ages.
            These classes will be held at the same time through the week from <b>Monday to Friday</b> with <b>hour-long sessions</b>.
            <b>Check out our <a href="/classes">View Classes</a></b> page for more information on individual classes including
            timings, content, pricing, age recommendations, and more. These <b>classes will be held
                live, virtually</b> over Google Meet with our apt and experienced instructors paired with <b>small groups of students</b>.
            Remember, that <b>ALL funds that we collect will go to charity.</b> Thank you and
            we look forward to providing your children with the best experience of their lives!
        </p>
    </div>
    <hr class="homepageBreak">
    <section id="faq" class="faq">
        <div class="container">
            <div class="row text-center">
                    <h1 class="display-3 fw-bold text-uppercase">faq</h1>
                <div class="heading-line"></div>
                <p class="lead">Frequently asked questions, get knowledge beforehand</p>

            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Are the classes that we offer free?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>No, the classes are not free.</strong> For each class that we conduct, we ask for a small price. All proceeds from these classes will go towards
                                    charity. The specific charity that we are supporting is called Sewa International and you can find more about them <a href="https://sewausa.org" target="_blank" rel="noreferrer noopener">here</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Who will be conducting the classes?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>The classes are taught by skilled volunteers who will not profit off of students.</strong> Classes56 is a volunteer run organization, so only there is no
                                    incentive for them to run the classes except for desire from their hearts. Students will be taught by teachers who have no other intention except providing students
                                    with quality lessons.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How is payment done?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                             <div class="accordion-body">
                                 <strong>Payment is done through PayPal and other online payment services. </strong>After you sign up for a class, you will get an email
                                 within 1-2 business days with payment information and further specifics regarding the class that you signed up for. Learn more about our
                                 payment options by clicking <a href="/donate">this link</a>.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    When does registration close for the camps?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <b>Registration for a summer camp closes 5 days before the first class</b>. We will send payment information to you as quickly as possible
                                    and you are required to pay 1 day before the first class. This is so we have ample time to provide you with Google Classroom invite and other
                                    information.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item shadow mb-3">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I get a refund if I am not able to attend?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <b>No, we do not offer refunds</b> as we guarantee the charity that money. This prevents us from providing refunds as we are unable to break
                                    that contract. Thank you for understanding.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="homepageBreak">
    <section id="contactinfo" class="contactinfo">
        <div class="contactinformation">
            <div class="row text-center">
                <h1 class="display-5 fw-bold text-uppercase">Contact Information</h1>
                <h1 class="display-7"><b>Contact us by email:</b> </h1>
                <ul>
                    <li><b>Main business email</b> - <a href="mailto:classes56official@gmail.com">classes56official@gmail.com</a></li>
                </ul>

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

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
