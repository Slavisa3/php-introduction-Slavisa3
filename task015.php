<?php
$browsers = array ('Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other');
$speeds = array ('Unknown', 'DSL', 'T1', 'Cable', 'Dialup', 'Other');
$os = array ('Windows', 'Linux', 'Macintosh', 'Other');

  class select {

        private $name;
        private $value;

        public function setName($name){
          $this->name = $name;
        }

        public function getName(){
          return $this->name;
        }


        public function setValue ($value) {
          if (!is_array ($value)) {
            exit ("This value is not array !");
          }
          $this->value = $value;
          }


        public function getValue(){
            return $this->value;
        }


        public function makeOptions ($value) {
          foreach ($value as $opt) {
                  echo "<option value=\"$opt\">" .ucfirst ($opt). "</option>\n";
          }

        }

        public function makeSelect () {

          echo "<select name=\"" .$this->getName()."\">\n";
          echo "<option value\"No response\"> --Select one--</option>\n";

            $this->makeOptions($this->getValue());
          echo "</select>";
        }
  }

?>





<!DOCTYPE html>
<html>
<head>

<title></title>


</head>
<body>
<?php if (empty ($_POST['submit'])) {



   ?>
   <p>* Indicates required field</p>
  <form method="POST" action="task015.php">
    <p>*Name:<br />
    <input type="" name="name" value="">
    <p>*Username:<br />
    <input type="" name="username" value="">
    <p>*Email:<br />
    <input type="" name="email" value="">
    <p><strong>Work Access:</strong><br />



      <?php
        echo "<p>\n</p>Primary Browser:";
        $browserWork = new Select ();
        $browserWork ->setName('browserWork');
        $browserWork ->setValue($browsers);
        $browserWork ->makeSelect();
        unset($browserWork);

        echo "<p>\n</p>Connection Speed:";
        $speedWork = new select ();
        $speedWork -> setName ('speedsWork');
        $speedWork -> setValue ($speeds);
        $speedWork -> makeSelect();
        unset($speedWork);

        echo "<p>\n</p>Operating System:";
        $osWork = new Select();
        $osWork -> setName ('osWork');
        $osWork -> setValue ($os);
        $osWork -> makeSelect();
        unset($osWork);
      ?>

          <p><strong>Work Access:</strong><br />
      <?php
          echo "<p>\n</p>Primary Browser:";
          $browserHome = new select ();
          $browserHome -> setName ('browserHome');
          $browserHome -> setValue ($browsers);
          $browserHome -> makeSelect ();
          unset($browserHome);

          echo "<p>\n</p>Connection Speed:";
          $speedHome = new Select ();
          $speedHome -> setName ('speedHome');
          $speedHome -> setValue ($speeds);
          $speedHome -> makeSelect ();
          unset($speedHome);


          echo "<p>\n</p>Operating System";
          $osHome =  new Select ();
          $osHome -> setName ('osHome');
          $osHome -> setValue ($os);
          $osHome -> makeSelect ();
          unset($osHome);
       ?>
      <br>
      <br>
      <input type="submit" name="submit" value="Go" />
        </form>




    <?php
    }else {

      $name=$_POST['name'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      $browserWork=$_POST['browserWork'];
      $speedWork=$_POST['speedsWork'];
      $osWork= $_POST['osWork'];
      $browserHome=$_POST['browserHome'];
      $speedHome=$_POST['speedHome'];
      $osHome=$_POST['osHome'];

      $imejl = strpos( $email , '@' );

      if(empty($name) || empty($username) || empty($imejl)){

        die ('Fill out the required fields. <br />
        <input type="submit" name="Back" value="Go Back!" onclick="self.location =\'task015.php\'"/></body></html>');

      }



      echo "<p>The following data has been saved for $name: </p>\n";
      echo "<p>Username: $username<br />\n";
      echo "Email: $email</p>\n";


      echo "<p>Work Access:</p>\n";
      echo '<ul>';

      echo "<li>$browserWork</li>";
      echo "<li>$speedWork</li>";
      echo "<li>$osWork</li>";

      echo "<p>Home Access:</p>\n";

      echo "<li>$browserHome</li>";
      echo "<li>$speedHome</li>";
      echo "<li>$osHome</li>";

      echo '</ul>';

  }
     ?>
</body>

</html>
