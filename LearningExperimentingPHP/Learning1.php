<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Hello</title>
    </head>
    <body>
        <?php
            echo("Hello World"); // echo writes out html (You can write html code)
            echo ("<h1>Welcome to the website</h1> <hr>");
            // variables in php
            $myInt = 45;
            $myBool = true;
            $myString = "HelloHello";
            $myString = strtoupper($myString);
            $numOfChars = strlen($myString);
            if ($myBool) {
                echo ("<h3>This variable is true. variable name is $myString</h3>");
            } else {
                echo ("<h3>This variable is false. variable name is $myString</h3>");
            }
            echo($myString[0]);
            echo("<br>");
            echo (str_replace("H", "Replaced", $myString));
            echo("<br>");
            echo (str_replace("Replaced", "H", $myString));
            echo ("<hr>");
            echo (substr($myString, 5, 5)); //Grabbing a substring
            // Getting User Input
        ?>
        <!--creating a form-->
        <form action="Learning1.php" method="get"> <!--What file will handle the form-->
            <label> Name:
                <input type="text" name="name">
                <input type="submit">
            </label>
        </form>
        <?php
            echo ($_GET["name"]);
        ?>
    </body>
</html>