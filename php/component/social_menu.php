<ul>

<?php

$menu = array(

	"Linkedin" => "http://www.linkedin.com/in/flavionn",
	"Behance" => "http://www.behance.net/flavionn",
	"Instagram" => "http://www.instagram.com/flavionnn",
	"Twitter" => "http://www.twitter.com/flavionnn"

);

foreach($menu as $chave => $valor) {

	echo "<li><a href='$valor' target='_blank'>$chave</a></li>";

}

?>

</ul>