<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>



     	<?php
      echo "Travel takes many forms, whether across town, across the country, or around the world<br>";
      echo "Here is a list of some common modes of transportation:";
      $text = "<br>Please add other modd of travel :<br>";

        if (empty ($_POST['uid'])) {
          $niz = array ('Automobile', 'Jet', 'Ferry', 'Subway');
        }
        else {

                $string = explode(',', $_POST['hiddenInput']);
                $string1 = explode(',', $_POST['uid']);
                $niz = array_merge($string, $string1);
                $text = "<br>Add more ?<br>";
              }

          foreach ($niz as  $lista) {
            echo "<li>$lista</li>";
            }

          $string = implode(',', $niz);
     	?>

        <form action="" method="POST">
          <?php echo "$text"; ?>
          <input type="text" name="uid" value="">
          <input type="hidden" name="hiddenInput" value="<?php echo"$string"; ?>" /> <br/>
          <input type="submit"  value="Go">
        </form>
</body>
</html>
