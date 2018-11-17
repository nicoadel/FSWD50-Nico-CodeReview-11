<?php 
include_once 'dbh.inc.php';
$sql= "SELECT concerts.concert_name, concerts.concert_image, concerts.concert_description,concerts.concert_date,concerts.concert_web,concerts.concert_price,place.place_city, place.place_zip , place.place_adress
FROM concerts
inner join place
on concerts.FK_adress=place.place_id";

$result = mysqli_query($conn,$sql);

$media = $result->fetch_all(MYSQLI_ASSOC);

   foreach( $media as $key)
          {
              echo " <div class='content_cards'>";
              echo "<div class='col-md-4 mb-4'>";
              echo "<div class='card h-100'>";
              echo "<div class='card-body'>";
              echo "<h2 class='card-title'>" . $key['concert_name'] . "</h2>";
              echo "<p class='card-text'>". $key['concert_description'] . "</p>";
              echo "<p class='card-text'>Date: ". $key['concert_date'] . "</p>";
              echo "<img class='img_book' src='". $key['concert_image'] . "' alt=''>";
              echo "<p class='card-text'><a href='". $key['concert_web'] . "'>Web</a></p>";
              echo "<p class='card-text'>Price: ". $key['concert_price'] . " euros</p>";
              echo "<p class='card-text'>". $key['place_city']." - ". $key['place_zip']." - ". $key['place_adress']. "</p>";
              echo "</div>";
              echo "<div class='card-footer'>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
          }
 ?>

