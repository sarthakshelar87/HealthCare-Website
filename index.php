<!DOCTYPE html>
<html>
  <head>
    <title>My Website</title>
    <style>
     header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  background-image: url("z.png");
}

.logo {
  flex: 1;
}

.logo img {
  max-height: 50px;
}

.buttons {
  display: flex;
  align-items: center;
}

.login,
.signup {
  padding: 10px;
  margin-left: 10px;
  border: none;
  background-color: #39e177;
  color: #fff;
  cursor: pointer;
}

.login:hover,
.signup:hover {
  background-color: #0062cc;
}

.navbar {
  background-color: #c9f1e4;
  overflow: hidden;
  padding: 20px;
}

.navbar a {
  float: left;
  color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 18px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.blog {
    background-color: #008000;
  display: flex;
  align-items: center;
  margin-bottom: 20px;
}

.blog img {
  width: 250px;
  align-items : "right";
  height: auto;
  margin-right: 20px;
}

.blog .text {
  flex: 1;
  font-size: 16px;
  line-height: 1.5;
}

.blog .readmore {
  display: inline-block;
  padding: 5px 10px;
  background-color: #008000;
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  border-radius: 5px;
}

.container{
    width: 1170px;
    margin: auto;
    flex-wrap: wrap;
    justify-content: space-around;
    border: 1px solid right;
    display: flex;
    
}
.items{
    flex-basis: 23%;
    margin: 1px;
    text-align: center;
    padding: 20px 0px ;
    font-family: Georgia, 'Times New Roman', Times, serif;
    box-shadow: 0px 0px 10px 3px rgb(74, 27, 60);
}
.items h3{
    padding: 10px 0px;
}
.items p{
    font-size: 13px;
    padding: 10px;
}
.items button{
    background-color:rgb(42, 105, 105);
    padding: 10px 25px;
    border: none;
    color: white;
    border-radius: 10px;
    margin: 10px 0px;
    
    
    
}
.items button:hover{
    background-color: rgb(74, 165, 165);
}
.items :hover{
    background-color:rgb(42, 105, 105);
   
}




.container1{
    width: 1500px;
    margin: 0px;
    flex-wrap: 29;
    justify-content: space-around;
    border: 1px solid right;
    display: flex;
    
}
.items1{
    flex-basis: 23%;
    margin: 1px;
    text-align: center;
    padding: 20px 0px ;
    font-family: Georgia, 'Times New Roman', Times, serif;
    box-shadow: 0px 0px 10px 3px rgb(74, 27, 60);
}
.items1 h3{
    padding: 10px 0px;
}
.items1 p{
    font-size: 13px;
    padding: 10px;
}
.items1 button{
    background-color:rgb(42, 105, 105);
    padding: 10px 25px;
    border: none;
    color: white;
    border-radius: 10px;
    margin: 10px 0px;
    
    
    
}
.items1 button:hover{
    background-color: rgb(74, 165, 165);
}
.items1 :hover{
    background-color:rgb(42, 105, 105);
   
}

.my-team-section {
  background-color: #4CAF50; /* green color */
  color: white; /* text color */
  text-align: center;
  padding: 20px;
  font-weight: bold;
}


.quote-patch {
    background-color: rgb(6, 142, 58);
    padding: 20px;
    margin: 20px 0;
    text-align: center;
  }
  
  .quote-text {
    font-size: 24px;
    font-style: italic;
    margin-bottom: 10px;
  }
  
  .quote-name {
    font-size: 18px;
    font-weight: bold;
  }
  .quote-name a {
    color: #fff;
    text-decoration: none;
  }


  .quote-1 {
    background-color: black;
    padding: 20px;
    margin: 20px 0;
    text-align: left;
  }
  
  .quote-1 {
    font-size: 24px;
    font-style: bold;
    margin-bottom: 10px;
  }
  
  .quote-1 {
    font-size: 18px;
    font-weight: bold;
  }
  .quote-1 a {
    color: #fff;
    text-decoration: none;
  }
  
  
  body {
  font-family: Arial, sans-serif;
  text-align: center;
  background-color: #f7f7f7;
}

h1 {
  margin-top: 50px;
}

form {
  margin-top: 50px;
}

label {
  display: inline-block;
  width: 120px;
  text-align: left;
}

input[type="number"] {
  width: 200px;
  padding: 8px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 20px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}



    </style>
  </head>
  <body>
    <header>
        <div class="logo">
          <img src="z.png" alt="FitMe logo" align="left">
        </div>
        <div class="buttons">
          <button class="login"><a href="login.php">Login</a></button>
          <button class="signup"><a href="signup1.php">Signup</a></button> 
        </div>
      </header>
      
      <div class="navbar">
        <a class="active" href="#home">Home</a>
        <a href="#team"></a>
       
        <a href="#team">My Team</a>
        <a href="#team"></a>
        <a href="#testimonials">Testimonials</a>
        <a href="#team"></a>
        <a href="#blogs">Recipes</a>
        <a href="#team"></a>
        <a href="#bmi">BMI</a>
        <a href="#team"></a>
        <a href="#diet">Diet</a>
        <a href="#team"></a>
        <a href="game.java">Mental health Zone</a>
        <a href="#testimonials"></a>
        <a href= "https://docs.google.com/forms/d/e/1FAIpQLSexPypqEBgf-BmXDo6gzG-7gfCCQoV1vz5s3sUVkshMqlo5nw/viewform" target="_blank"">Contact Us!</a>
      </div>

      
      <div>
        <hr>
      </div>
      
      <div class="container">
        <div class="items">
            <img src="coach.avif" / width="200">
            <h3>Coaches</h3>
            <p>In this code, the PHP section handles the form submission. It validates the email and, if valid, performs the password recovery logic. If there is an error, an error message is displayed. If the password recovery is successful, a success message is displayed.

Remember to replace the TODO comment with your actual password recovery logic, such as sending an email with password reset instructions.

Make sure to save this code in a file with a .php extension and run it on a PHP-enabled server to see</p>
            <button>Read More</button>
        </div>
        <div class="items">
            <img src="bmi.jpg" / width="200">
            <h3>BMI</h3>
            <p>In this code, the PHP section handles the form submission. It validates the email and, if valid, performs the password recovery logic. If there is an error, an error message is displayed. If the password recovery is successful, a success message is displayed.

Remember to replace the TODO comment with your actual password recovery logic, such as sending an email with password reset instructions.

Make su recovery is successful, a success message is displayed.

Remember to replace the TODO comment with your actual password recovery logic, such as sending an email with password reset instructions.

Make 
</p>
            <button>Read More</button>
        </div>
        <div class="items">
            <img src="diet.jpg" / width="200">
            <h3>Diet</h3>
            <p></p>
            <button>Read More</button>
        </div>
        <div class="items">
            <img src="fitness.jpg" / width="200">
            <h3>Fitness</h3>
            <p></p>
            <button>Read More</button>
        </div>

    </div>
      
    <div>
        <hr>
      </div>
      <div>
        <hr>
      </div>


      <div class="my-team-section">
        <h2>OUR TEAM</h2>
      </div>
      
      <div>
        <hr>
      </div>


      <div class="container1">
        <div class="items1">
            <img src="coach.avif" / width="150">
            <h3>CHINMAYEE</h3>
            
            <li><a href="">LINKEDIN</a></li>
            <li><a href="">WHATSAPP</a></li>
            <li><a href="">INSTAGRAM</a></li>
        
        </div>
        <div class="items1">
            <img src="coach.avif" / width="150">
            <h3>SAKSHI</h3>
            <li><a href="">LINKEDIN</a></li>
            <li><a href="">WHATSAPP</a></li>
            <li><a href="">INSTAGRAM</a></li>
        
        </div>
        <div class="items1">
            <img src="coach.avif" / width="150">
            <h3>SARTHAK</h3>
            <li><a href="">LINKEDIN</a></li>
            <li><a href="">WHATSAPP</a></li>
            <li><a href="">INSTAGRAM</a></li>
        </div>
        <div class="items1">
            <img src="coach.avif" / width="150" >
            <h3>ZENDE</h3>
            <li><a href="">LINKEDIN</a></li>
            <li><a href="">WHATSAPP</a></li>
            <li><a href="">INSTAGRAM</a></li>
        </div>
        
        <div class="items1">
            <img src="coach.avif" / width="150">
            <h3>ADITYA</h3>
            <li><a href="">LINKEDIN</a></li>
            <li><a href="">WHATSAPP</a></li>
            <li><a href="">INSTAGRAM</a></li>
        </div>
      </div>
        <div>
            <hr>
          </div>



          <div class="quote-patch">
            <p class="quote-text">PERSONALIZE YOUR FITNESS</p>
            <p class="quote-name"><a href="index.php">- WITH FITME</a></p>
          </div>


         

          

          <h1>BMI Calculator</h1>
          <form method="POST" action="calculate_bmi.php">
              <label for="height">Height (in cm):</label>
              <input type="number" name="height" id="height" required><br><br>
              <label for="weight">Weight (in kg):</label>
              <input type="number" name="weight" id="weight" required><br><br>
              <input type="submit" value="Calculate BMI">
          </form>
          
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
          
           <div class="quote-1">
            <p class="quote-1"><a href="https://docs.google.com/forms/d/e/1FAIpQLSexPypqEBgf-BmXDo6gzG-7gfCCQoV1vz5s3sUVkshMqlo5nw/viewform" target="_blank">- CHAT WITH US!</a></p>
          </div>
          
  </body>
</html>
