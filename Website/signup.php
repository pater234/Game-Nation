<?php
    session_start();

    include ("connection.php");
    include("functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        // Something was posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);
            if ($result && mysqli_num_rows($result) > 0)
            {
                echo "This username is already in use! Please try with another one!";
            }
            else
            {
                // Save to DataBase
                $user_id = random_num(20);
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
                mysqli_query($con, $query);

                header("Location: login.php");
                die;
            }
        }
        else
        {
            echo "PLease enter some valid information!";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
</head>
<body>
<style type="text/css">

    #text{

        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }

    #button{

        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }

    #box{

        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>
<div id="box">
    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white;">Signup</div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>

        <input id="button" type="submit" value="Signup"><br><br>

        <a href="login">Click to Login</a><br><br>
    </form>
</div>
</body>
</html>
