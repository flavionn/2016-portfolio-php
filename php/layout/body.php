<body <?php if($body_id != "") { echo 'id="'.$body_id.'"'; } ?>>

	<?php

	if($googleanalytics) { include_once(PATH_PHP_VENDOR."/googleanalytics.php"); }

	include(PATH_PHP_LAYOUT."/header.php");

	include(PATH_PHP_LAYOUT."/content.php");

	include(PATH_PHP_LAYOUT."/footer.php");

	if($livereload) { include_once(PATH_PHP_VENDOR."/livereload.php"); }

	?>

</body>