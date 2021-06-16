<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");
require "../vendor/autoload.php";
// define variables and set to empty values

error_reporting(0);

$nameErr = $emailErr = "";
$name = $email = "";
$classesChosen = array();
$className = array(
       "scratch", "java", "ue4", "web", "flask", "django", "php", "python", "coding", "exploring", "entrepreneurship", "3d",
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
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

    if ($nameErr == "" && $emailErr == "")
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

        $range = 'A' . $length . ':' . 'N' . $length;

        $innerValues = [$name, $email];

        foreach ($classesChosen as &$item)
        {
            array_push($innerValues, $item);
        }

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
    }

}



function test_input($data): string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
} ?>

<style>
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
    
    @media only screen and (max-width: 480px) {
        .mainForm {
            width: 24rem;
            max-width: 24rem;
        }
    }
</style>

<body class="body" style="position: relative; top: 0px">
    <div class="mainForm">
        <p><span class="error">* Required field</span></p>
        <form class="form-check signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

            <div class="row">
                <div class="input-group flex-nowrap" style="width: 90%">
                    <span class="input-group-text" id="addon-wrapping">Name</span>
                    <input name="name" type="text" class="form-control form-control-inline" placeholder="Name" aria-label="Name" aria-describedby="addon-wrapping">
                    <span class="error"> <?php echo $nameErr;?></span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="input-group flex-nowrap" style="width: 90%">
                    <span class="input-group-text" id="addon-wrapping">Email</span>
                    <input name="email" type="text" class="form-control form-control-inline" placeholder="example@gmail.com" aria-label="Email" aria-describedby="addon-wrapping">
                    <span class="error"> <?php echo $emailErr;?></span>
                </div>
            </div>
            <br><br>
            <input class="form-check-input" type="checkbox" id="scratch" name="scratch" value="scratch">
            <label class="form-check-label" for="scratch"> Scratch</label><br>
            <input class="form-check-input" type="checkbox" id="java" name="java" value="java">
            <label class="form-check-label" for="java"> Java</label><br>
            <input class="form-check-input" type="checkbox" id="ue4" name="ue4" value="ue4">
            <label id="ue4Label" class="form-check-label" for="ue4"> Game Design in Unreal Engine 4</label><br>
            <input class="form-check-input" type="checkbox" id="web" name="web" value="web">
            <label class="form-check-label" for="web"> Basic Web Design</label><br>
            <input class="form-check-input" type="checkbox" id="flask" name="flask" value="flask">
            <label class="form-check-label" for="flask"> Web Design with Flask</label><br>
            <input class="form-check-input" type="checkbox" id="django" name="django" value="django">
            <label class="form-check-label" for="django"> Web Design with Django</label><br>
            <input class="form-check-input" type="checkbox" id="php" name="php" value="php">
            <label class="form-check-label" for="php"> Web Design with PHP</label><br>
            <input class="form-check-input" type="checkbox" id="python" name="python" value="python">
            <label class="form-check-label" for="python"> Python Programming</label><br>
            <input class="form-check-input" type="checkbox" id="coding" name="coding" value="coding">
            <label class="form-check-label" for="coding"> Coding Principles</label><br>
            <input class="form-check-input" type="checkbox" id="exploring" name="exploring" value="exploring">
            <label class="form-check-label" for="exploring"> Exploring Our Universe</label><br>
            <input class="form-check-input" type="checkbox" id="entrepreneurship" name="entrepreneurship" value="entrepreneurship">
            <label class="form-check-label" for="entrepreneurship"> Entrepreneurship</label><br>
            <input class="form-check-input" type="checkbox" id="3d" name="3d" value="3d">
            <label class="form-check-label" for="3d"> 3D Modeling</label><br><br>
            <div class="row">
                <button type="submit" class="btn btn-primary" style="width: 30%;">Submit</button>
            </div>
        </form>
    </div>
</body>

<script>
    var navbarWidthStr = $(".navbar").css('width');
    var navbarPos = navbarWidthStr.indexOf("px");
    var navbarWidth = parseFloat(navbarWidthStr.slice(0, navbarPos));
    var formStr = $(".mainForm").css('width');
    var formPos = formStr.indexOf("px");
    var form = parseFloat(formStr.slice(0, formPos));
    var offset = (navbarWidth - form)/2;
    $(".mainForm").css('margin-left', offset.toString() + "px");

</script>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>