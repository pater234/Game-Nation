<?php
session_start();

    include ("connection.php");
    include("functions.php");
    $user_data = check_login($con);
    if ($user_data == null)
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
        <title>My Website</title>
        <link rel="stylesheet" href="CSSFiles/styles.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="logoname">
                    <a class="cta" id="Classes56">Classes 56</a>
                    <div class="verticalLine"></div>
                    <img class="logo" src="Logo.png" alt="logo" width=30% height=auto>
                </div>
                <div class="nav__links">
                    <li class="cta">View Classes</li>
                    <li class="cta">About Us</li>
                    <li class="cta">Contact Information</li>
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