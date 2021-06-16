<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
    .fa {
        padding: 20px;
        font-size: 30px;
        width: 50px;
        text-align: center;
        text-decoration: none;
        transition: opacity 0.2s;
    }

    /* Add a hover effect if you want */
    .fa-youtube:hover {
        opacity: 0.7;
        color: red;
    }

    .fa-youtube {
        color: red;
    }

    .fa-instagram {
        color: palevioletred;
    }

    .fa-instagram:hover {
        color: palevioletred;
        opacity: 0.7;
    }

    .fa-facebook:hover {
        opacity: 0.7;
    }

    .fa-google {
        color: #ec3d3d;
    }

    .fa-google:hover {
        color: #ec3d3d;
        opacity: 0.7;
    }
</style>

<footer class="bg-dark text-white pt-5 pb-4">
    <div class="container text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold" style="font-family: Montserrat, sans-serif; color: lightskyblue">Classes56</h5>
                <p style="font-family: Montserrat, sans-serif">We here at Classes56 strive to give you the best education we can along with giving back to the community</p>
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 contactinfo" style="font-family: Montserrat, sans-serif; color: lightskyblue">
                <h5 class="text-uppercase mb-4 font-weight-bold">Contact Us</h5>
                <div>
                    <a href="mailto:classes56official@gmail.com" class="fa fa-google"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="https://www.youtube.com/channel/UCot7W_-D9sqeQoj3cMOYBdw" class="fa fa-youtube"></a>
                    <a href="#" class="fa fa-facebook"></a>
                </div>
            </div>
            <hr class="mb-4">
        </div>
    </div>
</footer>

<script>
    var h = $(".navbar").outerHeight();
    $(".body").css('top', h);
</script>