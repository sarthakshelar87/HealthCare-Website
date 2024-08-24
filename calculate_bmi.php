<?php
          if(isset($_POST['height']) && isset($_POST['weight'])){
              $height = $_POST['height'];
              $weight = $_POST['weight'];
              
              $bmi = $weight / (($height/100) * ($height/100));
              
              echo "<h2>Your BMI Result:</h2>";
              echo "<p>Your weight: " . $weight . " kg</p>";
              echo "<p>Your height: " . $height . " cm</p>";
              echo "<p>Your BMI: " . round($bmi, 1) . "</p>";
              
              if($bmi < 18.5){
                  echo "<p>You are underweight.</p>";
              } elseif($bmi >= 18.5 && $bmi <= 24.9){
                  echo "<p>You have a normal weight.</p>";
              } elseif($bmi >= 25 && $bmi <= 29.9){
                  echo "<p>You are overweight.</p>";
              } else{
                  echo "<p>You are obese.</p>";
              }
          }
          ?>