<!DOCTYPE html>
<html>
  <head>

    <!-- Meta Data --> 
    <meta charset="utf-8">
    <meta name="description" content="User Input, with JavaScript">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">

    <!-- Link to CSS file --> 
    <link rel="stylesheet" href="./css/style.css">

    <!-- Title --> 
    <title>Enter Degrees is Celsius, with JS</title>
  </head>
  <body>
    
    <!-- PHP echo to print the html to the page -->
    <h1><?php 
			echo "Enter Degrees in Celsius";?></h1>

    <!-- Image -->
    <?php
      echo '<center><img src= "./images/movies.PNG" alt="HOTandCOLD" width="35%" height="auto"></center>';
    ?>
 
    <!-- Buttons and Text Field -->
    <br>
    <form method= "post">
      Enter your age to find what movie you are allowed to watch: <input type="number" step="1" min="0" name="Age">
      <br>
      <br>
      <input type="submit" name="submit" value="Display" />
    </form>
    <br>
    <br>

    <!-- Define Constants -->
    <?php
      if(isset($_POST['submit'])) {

        define("MIN_R", 18);
        define("MIN_PG_13", 13);
        define("MIN_G", 10);
        $Age = ($_POST['Age']);

      if ($Age >= 0) {
        if ($Age == 0) {
          echo " Oops looks like you can't input zero. ";
          
        } else if ($Age >= MIN_R) {
        echo " You can see an R rated movie. ";
        
      } else if ($Age >= MIN_PG_13) {
          echo " You can see PG-13 movie. ";
        
      } else if ($Age >= MIN_G) {
          echo " You can see a G or PG movie. ";
        
      } else  {
          echo " You are not old enough to see a movie alone. ";
      }
      } else {
        echo " Did you think not inputting your age was a witty idea? Try again. ";
      }
      }
    ?>   
    <br>
    <br>
  </body>
</html>