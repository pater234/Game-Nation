<?php include "layout.php";
if ($user_data == null or !isset($user_data))
{
    header("Location: Login");
}
?>

<a>This is account information</a>

<?php include "footer.php"?>
