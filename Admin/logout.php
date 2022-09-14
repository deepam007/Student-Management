<?php

 session_start();
 unset($_SESSION["admin_name"]);
 //unset($_SESSION[]);

?>

<script type="text/javascript">
	window.location = "login.php";
</script>