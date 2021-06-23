<ul>

<?php

$main_menu = array(

	"about" => "about",
	"works" => "works",
	"contact" => "contact"

);

foreach($main_menu as $chave => $valor) {

	echo "<li><a href='".BASE_URL."/#$valor' class='scroll'>$chave</a></li>";

}

?>

</ul>