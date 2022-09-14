<?php

 session_start();
 unset($_SESSION["stname"]);
 unset($_SESSION["img"]);

?>

<script type="text/javascript">
	window.location = "login.php";
</script>