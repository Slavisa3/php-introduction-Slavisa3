<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

     	<?php
        $text = "<br>Please choose a city:<br>";
        $niz = array (
        "Japan"=>"Tokyo",
        "Mexico"=>"Mexico City",
        "USA"=>"New York City",
        "India" => "Mumbai",
        "Korea" => "Seoul",
        "China" => "Shanghai",
        "Nigeria" => "Lagos",
        "Argentina" => "Buenos Aires",
        "Egypt" => "Cairo",
        "UK" => "London"
      );
        if (empty ($_POST['submit'])) {
          ?>

          <form   method="POST" action="task009.php">
             <?php echo   "$text"; ?>
            <select name="city">

              <?php
              foreach ($niz as  $city) {
                echo  "<option value=\"$city\">$city</option>\n";
              }
               ?>
             </select>
             <input type="submit" name="submit" value="Go">
           </form>
           <?php

         }else{
           $city=$_POST['city'];
           $drzava=array_search ($city,$niz);
           echo "<p>$city is in $drzava.</p>" ;


         }
         ?>

</body>

</html>
