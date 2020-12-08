<h1>Hello PHPwwwww~~~</h1>
<?php
 if( isset($_GET["a"] )&& isset($_GET["b"]) )
 {
     shell_exec("sudo python3  /usr/lib/cgi-bin/cgi2.py  -a ".$_GET["a"]." -b ".$_GET["b"]);

 }
else
{
    echo  "php?a=on&b=off";
 }
?>
