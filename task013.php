<?php
$browsers = array ('Firefox', 'Chrome', 'Internet Explorer', 'Safari', 'Opera', 'Other');

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
<?php if (!isset ($_POST['submit'])) {



   ?>
  <form method="POST" action="task013.php">
    <p>Name:<br />
    <input type="" name="name" value="">
    <p>Username:<br />
    <input type="" name="username" value="">
    <p>Email:<br />
    <input type="" name="email" value="">
    <p>Browser:<br />



      <?php

       $browser = new Select();
       $browser->setName('browser');
       $browser->setValue($browsers);
       $browser->makeSelect();

       ?>

      <input type="submit" name="submit" value="Go" />
        </form>




    <?php
    }else {

      $name=$_POST['name'];
      $username=$_POST['username'];
      $email=$_POST['email'];
      $selBrowser=$_POST['browser'];

      echo "The following data has been saved for $name: <br />";
      echo "Username: $username<br />";
      echo "Email: $email<br />";
      echo "Browser: $selBrowser<br />";

    }

     ?>
</body>

</html>
