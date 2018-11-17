<?php 
include_once 'dbh.inc.php';
$sql= "SELECT things_to_do.things_name, things_to_do.things_picture, things_to_do.things_description, things_to_do.things_web, place.place_city, place.place_zip, place.place_adress
FROM things_to_do
inner join place
on things_to_do.FK_adress=place.place_id";

$result = mysqli_query($conn,$sql);

$media = $result->fetch_all(MYSQLI_ASSOC);

   foreach( $media as $key)
          {
              echo " <div class='content_cards'>";
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card h-100'>";
              echo "<div class='card-body'>";
              echo "<h2 class='card-title'>" . $key['things_name'] . "</h2>";
              echo "<img class='img_book' src='". $key['things_picture'] . "' alt=''>";
              echo "<p class='card-text'><a href='". $key['things_web'] . "'>Web</a></p>";
              echo "<p class='card-text'>". $key['place_city']." - ". $key['place_zip']." - ". $key['place_adress']. "</p>";
              echo "</div>";
              echo "<div class='card-footer'>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }
 ?>

