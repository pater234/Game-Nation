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

    ?>
    </body>
</html>