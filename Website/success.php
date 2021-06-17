<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php");

if (!$_POST["pass"] == "classes56")
{
    echo '<script>alert("Hello")</script>';
}

?>

<body>
<p>success</p>

</body>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/footer.php"); ?>