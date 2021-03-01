<!DOCTYPE htlm>
<html lang="es">
    <head>
        <title> My first page</title>
        <meta charset="utf-8"
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
    <p> Today is <?php echo date("l"); ?>. Here's the latest news. </p>

    <script type="text/javascript">
         document.write("Today is " + Date());
      </script>

      <?php
      function pr( $value ){
            echo $value."<br />" ;
      }
      ?>   

      <?php
         pr("<br />");
         pr("<br />");
         $username = "Fred Smith <br />";
         pr($username);
         pr("<br />");
         $current_user = $username;
         pr($current_user);
         
      ?>

      <?php
        $a = 12;
        $b = 1000; // . dot symbol is for concatenating purposes.
        $a .= $b;

        pr($a);

      ?>

      <?php

        $y = 0;

        echo "hey";

        echo $y;

        function new_line(){
          return "<br />";
        }

        function double_new_line(){
          return "<br /> <br />";
        }

        if ($y-- == 0)
            echo "<br /> $y geniuses.";

        print double_new_line() . " Hello programmers. $y ";

      ?>

    </body
</html>    