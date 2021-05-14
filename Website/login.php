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
        // Read from DataBase
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);
        if ($result)
        {
            if ($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                if (password_verify($password, $user_data['password']))
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: homepage");
                    die;
                }
            }
        }
        echo "Wrong username/password combination";

    } else
    {
        echo "PLease enter some valid information!";
    }
}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <style type="text/css">

            #text{
                height: 25px;
                border-radius: 10px;
                padding: 4px;
                border: solid thin #aaa;
                width: 100%;
                outline: 0;
            }

            #button{
                padding: 10px;
                width: 100px;
                color: white;
                background-color: lightblue;
                border: none;
                transition: all 0.3s ease 0s;
                border-radius: 10px;
                cursor: pointer;
            }

            #button:hover {
                background-color: rgba(0, 136, 169,0.5);
            }

            #box{
                font-family: Montserrat, sans-serif;
                background-color: #ffffff;
                margin: 200px auto 100px;
                max-width: 260px;
                padding: 10px 45px 30px 45px;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
                border-radius: 20px;
            }
            body {
                background-color: #aaaaaa;
            }

            #title {
                font-size: 20px;
                padding: 1px;
                text-align: center;
            }

        </style>
        <div id="topbar">
            <a href="homepage"></a>
        </div>
        <div id="box">
            <p id="title">Login</p>
            <form method="post">
                <input id="text" type="text" name="user_name" placeholder="username">
                <input id="text" type="password" name="password" placeholder="password">
                <input id="button" type="submit" value="Login"><br><br>
                <p>Not registered? <a href="signup">Create an account</a></p>
            </form>
        </div>
    </body>
</html>
