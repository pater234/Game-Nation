<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");
require __DIR__ . '../vendor/autoload.php';
// define variables and set to empty values
$nameErr = $emailErr = $websiteErr = "";
$name = $email = $comment = $website = "";

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

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }
    $client = new \Google_Client();
    $client->setApplicationName('Google Sheets and PHP');
    $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
    $client->setAccessType('offline');
    $client->setAuthConfig(__DIR__ . '/credentials.json');
    $service = new Google_Service_Sheets($client);
    $spreadsheetId = "1cpBWbJ5MnIF-klB0sa3-yVnAb5hkm7FLeFGo6teTsqg";
    $update_range = "Sheet1! A1";
    $values = [[$name]];
    $body = new Google_Service_Sheets_ValueRange([

        'values' => $values

    ]);

    $params = [

        'valueInputOption' => 'RAW'

    ];
    $update_sheet = $service->spreadsheets_values->update($spreadsheetId, $update_range, $body, $params);
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>