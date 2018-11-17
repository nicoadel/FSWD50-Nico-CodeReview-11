<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Library Page" content="">
    <meta name="Adelmann" content="">

    <title>Adelmann Library</title>
  </head>

  <body>
    <div class="content">
      <?php
   require 'navbar.php';
   ?>
    <!-- Page Content -->
    <div class="index_container">
      <div class="container_left">
        <h3 class="text-center text-primary">Travelblog!</h3>
      <?php
            if (isset($_SESSION['userId']))
            {
               echo '<p class="alert alert-success">Welcome: '.$_SESSION['userUid'].'!  You have successfully logged in!</p>';
             }
             else
              {
                 echo '<p class="alert alert-success">You are logged out! Please login to see the content :)</p>';
              }
                  ?>
      </div>
      <div class="container_right">
         <?php
              require 'weather.php';
             ?>
      </div>
    
    </div>
    </div>
     
    <?php
    require 'footer.php';
    ?>
  </body>

</html>
