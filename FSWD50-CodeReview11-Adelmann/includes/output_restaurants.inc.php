<?php 
include_once 'dbh.inc.php';
$sql= "SELECT restaurants.restaurant_name, restaurants.restaurant_image, restaurants.restaurant_telephone_num, restaurants.restaurant_type, restaurants.restaurant_webadress, restaurants.restaurant_webadress, place.place_city, place.place_zip,place.place_adress 
FROM restaurants
inner join place
on restaurants.FK_location=place.place_id
";

$result = mysqli_query($conn,$sql);

$media = $result->fetch_all(MYSQLI_ASSOC);

   foreach( $media as $key)
          {
              echo " <div class='content_cards'>";
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card h-100'>";
              echo "<div class='card-body'>";
              echo "<h2 class='card-title'>" . $key['restaurant_name'] . "</h2>";
              echo "<p class='card-text'>". $key['restaurant_type'] . "</p>";
              echo "<img class='img_book' src='". $key['restaurant_image'] . "' alt=''>";
              echo "<p class='card-text'><a href='". $key['restaurant_webadress'] . "'>Web</a></p>";
              echo "<p class='card-text'>Tel: ". $key['restaurant_telephone_num'] . "</p>";
              echo "<p class='card-text'>". $key['place_city']." - ". $key['place_zip']." - ". $key['place_adress']. "</p>";
              echo "</div>";
              echo "<div class='card-footer'>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }
 ?>

