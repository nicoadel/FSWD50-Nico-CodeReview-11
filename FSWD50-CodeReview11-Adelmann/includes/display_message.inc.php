<?php
function display_message() {
	echo '<div class="msg">';
	echo '<p>'.$_SESSION['message'].'</p>';
	unset($_SESSION['message']);
	echo '</div>';

}


?>