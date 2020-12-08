<html>
<head>
<meta name="viewport" content="width=device-width" />
<title>LED Control</title>
</head>
         <body>
         <form method="get" action="bbb.php">
                 LED Control:
                 <input type="submit" value="11" name="onon">
                 <input type="submit" value="01" name="offon">
                 <input type="submit" value="10" name="onoff">
                 <input type="submit" value="00" name="offoff">
         </form>
         <?php
         if(isset($_GET['onon'])){
                 shell_exec("sudo python3 /usr/lib/cgi-bin/cgi2.py -a on -b on");

                 echo "LED a is on  LED b is on";
           }
         if(isset($_GET['offon'])){
                 shell_exec("sudo python3 /usr/lib/cgi-bin/cgi2.py -a off -b on");
                 echo "LED a is off LED b is on";
           }
         if(isset($_GET['onoff'])){
                 shell_exec("sudo python3 /usr/lib/cgi-bin/cgi2.py -a on -b off");
                 echo "LED a is on  LED b is off";
           }
         if(isset($_GET['offoff'])){
                 shell_exec("sudo python3 /usr/lib/cgi-bin/cgi2.py -a off -b off");
                 echo "LED a is off LED b is off";
           }
           ?>
         </body>
</html>
