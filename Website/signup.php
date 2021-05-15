<?php
include "layout.php";

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

                header("Location: Login");
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
    <title>Login</title>
</head>
<body>
<style type="text/css">

    #text{
        border-radius: 10px;
        padding: 15px;
        border: 0;
        width: 100%;
        outline: 0;
        margin: 0px 0px 15px;
        background: #f2f2f2;
        box-sizing: border-box;
        font-size: 14px;
    }

    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: #0088a9;
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
        width: 19rem;
        max-width: 25rem;
        padding: 10px 45px 30px 45px;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        border-radius: 20px;
        text-align: center;
        border: 5px #0088a9;
    }
    body {
        /*background-color: #aaaaaa;*/
        background-image: url("https://womensagenda.com.au/wp-content/uploads/2020/04/learning-at-home.jpg");
        background-size: 100%;
        background-blend-mode: color-burn;
    }

    #title {
        font-size: 20px;
        padding: 1px;
        text-align: center;
    }


</style>
<div id="box">
    <img id="imglogo" src="Logo.png">
    <p id="title">Sign Up</p>
    <form method="post">
        <input id="text" type="text" name="user_name" placeholder="Username">
        <input id="text" type="password" name="password" placeholder="Password">
        <input id="button" type="submit" value="Sign Up"><br><br>
        <p>Already registered? <a href="Login">Log In</a></p>
    </form>
</div>
</body>
<?php include "footer.php"?>
</html>
