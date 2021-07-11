<?php
//if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])){
  //  $refuri = parse_url($_SERVER['HTTP_REFERER']); // use the parse_url() function to create an array containing information about the domain
    //if($refuri['host'] == "classes56.com"){
      //  echo "You should email fork@cutlery-in-the-toaster.com and tell me I have a dead link on this site.";
    //}
    //else{
      //  echo "You should email someone over at " . $refuri['host'] . " and let them know they have a dead link to this site.";
    //}
//}
//else{
  //  echo "If you got here from Angola, you took a wrong turn at Catumbela. And if you got here by typing randomly in the address bar, stop doing that. You're filling my error logs with unnecessary junk.";
//}
?>

<?php include ($_SERVER["DOCUMENT_ROOT"] . "/layout.php"); ?>


<body class="body" style="position: relative; top: 0px; background-color: lightblue;">
    <div id="404" style="background-color: #ffffff; height: 140px; width: 700px;
    text-align: center; left: 50%; position: relative; transform: translate(-50%);
    margin: 50px 10px; padding: 10px; border-radius: 10px">
        <h1>404</h1>
        <h1>Sorry, that page doesn't exist!</h1>
    </div>
    <br>
    <div style="text-align: center">
    <img src="/othercontent/sad-face.svg" alt="sad face">
    </div>
</body>

<script>
    var h = $(".navbar").outerHeight();
    $(".body").css('top', h);
</script>
