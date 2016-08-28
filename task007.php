<?php

        $gradovi = array ('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');
         //$zarez = implode(",", $gradovi);
          // echo $zarez;
            sort($gradovi);
            foreach ($gradovi as $key => $value) {
              echo  "<ul><li>$value,</li></ul>";
            }
          echo "<br>";
          array_push($gradovi, 'Los Angeles', 'Calcutta', 'Osaka', 'Beijing');
          sort($gradovi);
            foreach ($gradovi as $key => $value) {
                echo  "<ul><li>$value,</li></ul>";
            }
