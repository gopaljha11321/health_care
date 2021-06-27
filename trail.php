<?php
include("xyz.php");   
$html = file_get_html('https://www.worldometers.info/coronavirus/country/india/');
$var1=$html->find('.maincounter-number',0)->plaintext;
echo"$var1";
?>
<!Doctype html>
<html>
    <head>
        <title></title>
        <script>
            <?php 
            echo "var x = '$var1';";
            console.log(x);
            ?>
            
        </script>
    </head>
</html>