<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");
require "../vendor/autoload.php";
// define variables and set to empty values

error_reporting(0);

$nameErr = $emailErr = $classErr = $signupFilled =  false;
$name = $email = $pNumber = "";
$classesChosen = array();
$className = array(
       "scratch", "web", "coding", "exploring", "java", "python", "entrepreneurship", "3d", "ue4", "flask", "django", "php", "apPhysics", "unity", "iot",
);

$classPrice = array(
        30, 30, 30, 30, 30, 30, 30, 30, 35, 35, 35, 35, 35, 35, 30,
);
$totalPrice = 0;

$alert = false;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = true;
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = true;
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["pNumber"]))
    {
        $pNumber = "";
    }
    else
    {
        $pNumber = test_input($_POST["pNumber"]);
    }

    foreach ($className as &$item)
    {
        if (isset($_POST[$item]))
        {
            array_push($classesChosen, 1);
        }
        else
        {
            array_push($classesChosen, 0);
        }
    }


    foreach (range(0, count($classesChosen) - 1) as $i)
    {
        if ($classesChosen[$i] == 1)
        {
            $totalPrice += $classPrice[$i];
            if ($className[$i] == "scratch" || $className[$i] == "web" || $className[$i] == "exploring" || $className[$i] == "coding" || $className[$i] == "entrepreneurship" || $className[$i] == "java" || $className[$i] == "3d" || $className[$i] == "python" || $className[$i] == "ue4" || $className[$i] == "flask" || $className[$i] == "django" || $className[$i] == "php")
            {
                $signupFilled = true;
                break;
            }
        }
    }

    if ($totalPrice == 0)
    {
        $classErr = true;
    }

    if ($signupFilled)
    {
        $classErr = false;
    }

    if (!$nameErr && !$emailErr && !$classErr && !$signupFilled)
    {
        $client = new Google_Client();
        $client->setApplicationName('Google Sheets and PHP');
        $client->setScopes((array)Google_Service_Sheets::SPREADSHEETS);
        $client->setAccessType('offline');
        try {
            $client->setAuthConfig("../credentials.json");
        } catch (Google_Exception $e) {
        }
        $service = new Google_Service_Sheets($client);
        $spreadsheetId = "1cpBWbJ5MnIF-klB0sa3-yVnAb5hkm7FLeFGo6teTsqg";

        $rangeGet = 'A1:A100';
        $response = $service->spreadsheets_values->get($spreadsheetId, $rangeGet);
        $valuesGet = $response->getValues();
        $length = strval(count($valuesGet) + 1);

        $range = 'A' . $length . ':' . 'T' . $length;

        $innerValues = [$name, $email, $pNumber];

        foreach ($classesChosen as &$item)
        {
            array_push($innerValues, $item);
        }

        array_push($innerValues, $totalPrice);

        array_push($innerValues, 0);

        $values = [
            $innerValues
        ];
        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => 'RAW'
        ];
        $result = $service->spreadsheets_values->update(
            $spreadsheetId,
            $range,
            $body,
            $params
        );
        echo '
<div class="alert alert-success">
    Thank you for signing up! You will get an email with further information within 1 business day!
</div>';
    }
    else
    {
        if ($nameErr)
        {
            echo '
<div class="alert alert-danger" role="alert">
    Please enter a valid name!
</div>';
        }
        if ($emailErr)
        {
            echo '
<div class="alert alert-danger" role="alert">
    Please enter a valid email address!
</div>';
        }
        if ($classErr)
        {
            echo '
<div class="alert alert-danger" role="alert">
    Please select at least 1 class!
</div>';
        }
        if ($signupFilled)
        {
            echo '
<div class="alert alert-danger" role="alert">
    Signups for Week 1 and Week 2 have already been filled! Please select another class from another week!
</div>';
        }
    }
}

function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
} ?>

<style>

    body {
        background-color: lightblue;
    }

    .mainForm {
        font-family: Montserrat, sans-serif;
        background-color: #ffffff;
        overflow: hidden;
        margin-top: 5%;
        margin-bottom: 5%;
        width: 25rem;
        max-width: 25rem;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
        border-radius: 30px;
        padding: 20px 30px 30px 20px;
    }
    .form-control-inline {
        min-width: 0;
        width: 20px;
        display: inline;

    }

    @media only screen and (min-width: 1000px) and (max-width: 1299px) {
        .mainForm {
            width: 29rem;
            max-width: 29rem;
        }
    }

    @media only screen and (max-width: 480px) and (min-width: 401px){
        .mainForm {
            width: 24rem;
            max-width: 24rem;
        }
    }

    @media only screen and (max-width: 400px) {
        .mainForm {
            width: 21rem;
            max-width: 21rem;
        }
    }

    @media only screen and (min-width: 1300px) {
        .mainForm {
            width: 33rem;
            max-width: 33rem;
        }
    }

    #title {
        font-size: 30px;
        text-align: center;
    }

    #classes {
        font-size: 30px;
        text-align: left;
    }
    .red
    {
        color: red;
    }

    .blue {
        color: #007bff;
    }

    .grey {
        color: #7d7d7d;
    }
</style>

<body class="body" style="position: relative; top: 0px">
    <div id="alert" class="alert alert-primary text-center visually-hidden" role="alert">
        <?php echo $nameErr;?>
        <br>
        <?php echo $emailErr;?>
        <br>
        <?php echo $classErr;?>
    </div>
    <div class="mainForm">
        <div style="text-align: center;">
            <img id="imglogo" src="othercontent/Logo.png">
            <p id="title">Sign Up</p>
        </div>
        <br>
        <form class="form-check signupForm" method="post">
            <div class="row">
                <div class="input-group flex-nowrap" style="width: 90%">
                    <span class="input-group-text" id="addon-wrapping">Student Name <p class="red">*</p></span>
                    <input name="name" type="text" class="form-control form-control-inline" placeholder="John Doe" aria-label="Name" aria-describedby="addon-wrapping">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-group flex-nowrap" style="width: 90%">
                    <span class="input-group-text" id="addon-wrapping">Email <p class="red">*</p></span>
                    <input name="email" type="text" class="form-control form-control-inline" placeholder="example@gmail.com" aria-label="Email" aria-describedby="addon-wrapping">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-group flex-nowrap" style="width: 90%">
                    <span class="input-group-text" id="addon-wrapping">Phone Number</span>
                    <input name="pNumber" type="text" class="form-control form-control-inline" placeholder="1234567890" aria-label="pNumber" aria-describedby="addon-wrapping">
                </div>
            </div>
            <br>
            <br>
            <p class="classes">Classes <span class="red">*</span> :</p>
            <p class="blue">Week of July 5th - <b class="text-uppercase red">No signups being accepted for this week!</b></p>
            <input class="form-check-input" type="checkbox" id="coding" name="coding" value="coding" onclick="return false;">
            <label class="form-check-label grey" for="coding"> <b>Coding Principles</b> ($30) - 4pm to 5pm</label><br>
            <input class="form-check-input" type="checkbox" id="web" name="web" value="web" onclick="return false;">
            <label class="form-check-label grey" for="web"> <b>Web Design Fundamentals</b> ($30) - 4pm to 5pm</label><br>
            <input class="form-check-input" type="checkbox" id="scratch" name="scratch" value="scratch" onclick="return false;">
            <label class="form-check-label grey" for="scratch"> <b>Scratch</b> ($30) - 5:30pm to 6:30pm</label><br>
            <input class="form-check-input" type="checkbox" id="exploring" name="exploring" value="exploring" onclick="return false;">
            <label class="form-check-label grey" for="exploring"> <b>Exploring Our Universe</b> ($30) - 5:30pm to 6:30pm</label><br><br>
            <p class="blue">Week of July 12th - <b class="text-uppercase red">No signups being accepted for this week!</b></p>
            <input class="form-check-input" type="checkbox" id="entrepreneurship" name="entrepreneurship" value="entrepreneurship" onclick="return false;">
            <label class="form-check-label grey" for="entrepreneurship"> <b>Entrepreneurship</b> ($30) - 3pm to 4pm</label><br>
            <input class="form-check-input" type="checkbox" id="java" name="java" value="java" onclick="return false;">
            <label class="form-check-label grey" for="java"> <b>Java</b> ($30) - 3pm to 4pm</label><br>
            <input class="form-check-input" type="checkbox" id="3d" name="3d" value="3d" onclick="return false;">
            <label class="form-check-label grey" for="3d"> <b>3D Modeling</b> ($30) - 4:30pm to 5:30pm</label><br>
            <input class="form-check-input" type="checkbox" id="python" name="python" value="python" onclick="return false;">
            <label class="form-check-label grey" for="python"> <b>Python</b> ($30) - 4:30pm to 5:30pm</label><br><br>
            <p class="blue">Week of July 19th - <b class="text-uppercase red">No signups being accepted for this week!</b></p>
            <input class="form-check-input" type="checkbox" id="ue4" name="ue4" value="ue4" onclick="return false;">
            <label class="form-check-label grey" for="ue4"> <b>Game Design in Unreal Engine 4</b> ($35) - 2:30pm to 3:30pm</label><br>
            <input class="form-check-input" type="checkbox" id="flask" name="flask" value="flask" onclick="return false;">
            <label class="form-check-label grey" for="flask"> <b>Web Design with Flask</b> ($35) - 4pm to 5pm</label><br>
            <input class="form-check-input" type="checkbox" id="django" name="django" value="django" onclick="return false;">
            <label class="form-check-label grey" for="django"> <b>Web Design with Django</b> ($35) - 4pm to 5pm</label><br>
            <input class="form-check-input" type="checkbox" id="php" name="php" value="php" onclick="return false;">
            <label class="form-check-label grey" for="php"> <b>Web Design with PHP</b> ($35) - 4pm to 5pm</label><br><br>
            <p class="blue">Week of July 26th</p>
            <input class="form-check-input" type="checkbox" id="apPhysics" name="apPhysics" value="apPhysics">
            <label class="form-check-label" for="apPhysics"> <b>AP Physics 1 Crash Course</b> ($35) - 2:30pm to 3:30pm</label><br>
            <input class="form-check-input" type="checkbox" id="iot" name="iot" value="iot">
            <label class="form-check-label" for="iot"> <b>Internet of Things</b> ($30) - 4pm to 5pm</label><br>
            <input class="form-check-input" type="checkbox" id="unity" name="unity" value="unity">
            <label class="form-check-label" for="unity"> <b>Game Design in Unity</b> ($35) - 4pm to 5pm</label><br><br>
            <p><b>IMPORTANT NOTE: All timings are in Eastern Time</b></p>
            <div class="row">
                <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    $(document).ready(function () {return centerForm()});

    $(window).resize(function () {return centerForm()});

     function centerForm()
     {
         var navbarWidthStr = $(".navbar").css('width');
         var navbarPos = navbarWidthStr.indexOf("px");
         var navbarWidth = parseFloat(navbarWidthStr.slice(0, navbarPos));
         var formStr = $(".mainForm").css('width');
         var formPos = formStr.indexOf("px");
         var form = parseFloat(formStr.slice(0, formPos));
         var offset = (navbarWidth - form)/2;
         $(".mainForm").css('margin-left', offset.toString() + "px");
     }

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>