<?php
session_start();

    include ("connection.php");
    include("functions.php");
    $user_data = check_login($con);
    if ($user_data == null or !isset($user_data))
    {
        $button1 = array("Log In", "Login");
        $button2 = array("Sign Up", "signup");
    }
    else
    {
        $button1 = array("Account Information");
        $button2 = array("Log Out", "logout");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Classes56</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="CSSFiles/styles.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="logoname" href="homepage">
                    <a class="cta" id="Classes56" href="homepage">Classes56</a>
                    <div class="verticalLine"></div>
                    <a href="homepage"><img class="logo" src="Logo.png" alt="logo" width=60% height=auto></a>
                </div>
                <div class="nav__links">
                    <li class="cta"><a href="viewclasses">View Classes</a></li>
                    <li class="cta"><a href="aboutus">About Us</a></li>
                    <li class="cta"><a href="contactinformation">Contact Information</a></li>
                </div>
                <div class="buttons">
                    <a class="cta" href="<?php echo $button1[1] ?>"><button><?php echo $button1[0] ?></button></a>
                    <a class="cta" href="<?php echo $button2[1] ?>"><button><?php echo $button2[0] ?></button></a>
                </div>
            </nav>
        </header>
        <?php
            if ($user_data != null)
            {
                $name = $user_data['user_name'];
                echo
                ('
                <div class="Welcome"> 
                    <a>Welcome '.$name.'</a>
                </div>'
                );
            }
        ?>
    </body>
</html>