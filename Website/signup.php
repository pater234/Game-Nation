<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");
require "../vendor/autoload.php";
// define variables and set to empty values

error_reporting(0);

$nameErr = $emailErr = "";
$name = $email = "";

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

        $range = 'A' . $length . ':' . 'B' . $length;
        $values = [
            [$name, $email]
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



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
<body class="body" style="position: relative; top: 0px">
    <p><span class="error">* required field</span></p>
    <div class="form">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name">
            <span class="error">* <?php echo $nameErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email">
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br>
            <input type="checkbox" id="scratch" name="scratch" value="scratch">
            <label for="scratch"> Scratch</label><br>
            <input type="checkbox" id="java" name="java" value="java">
            <label for="java"> Java</label><br>
            <input type="checkbox" id="ue4" name="ue4" value="ue4">
            <label for="ue4"> Game Design in Unreal Engine 4</label><br>
            <input type="checkbox" id="web" name="web" value="web">
            <label for="web"> Basic Web Design</label><br>
            <input type="checkbox" id="flask" name="flask" value="flask">
            <label for="flask"> Web Design with Flask</label><br>
            <input type="checkbox" id="django" name="django" value="django">
            <label for="django"> Web Design with Django</label><br>
            <input type="checkbox" id="php" name="php" value="php">
            <label for="php"> Web Design with PHP</label><br>
            <input type="checkbox" id="python" name="python" value="python">
            <label for="python"> Python Programming</label><br>
            <input type="checkbox" id="coding" name="coding" value="coding">
            <label for="coding"> Coding Principles</label><br>
            <input type="checkbox" id="exploring" name="exploring" value="exploring">
            <label for="exploring"> Exploring Our Universe</label><br>
            <input type="checkbox" id="entrepreneurship" name="entrepreneurship" value="entrepreneurship">
            <label for="entrepreneurship"> Entrepreneurship</label><br>
            <input type="checkbox" id="3d" name="3d" value="3d">
            <label for="3d"> 3D Modeling</label><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>