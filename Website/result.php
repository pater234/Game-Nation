<?php
error_reporting(0);
if ($_POST["pass"] == "classes56")
{
    echo '
<div class="alert alert-success">
    Thank you for signing up! You will get an email with further information within 1 - 2 business days!
</div>';
}
else
{
    if ($_POST["nameErr"] == "true")
    {
        echo '
<div class="alert alert-danger" role="alert">
    Please enter a valid name!
</div>';
    }
    if ($_POST["emailErr"] == "true")
    {
        echo '
<div class="alert alert-danger" role="alert">
    Please enter a valid email address!
</div>';
    }
    if ($_POST["classErr"] == "true")
    {
        echo '
<div class="alert alert-danger" role="alert">
    Please select at least 1 class!
</div>';
    }
}