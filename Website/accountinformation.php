<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");
if ($user_data == null or !isset($user_data))
{
    header("Location: /Login");
}
?>

<a>This is account information</a>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>
