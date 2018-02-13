<?php
session_start();
session_destroy();
header('location: http://localhost/wsh/my_meetic.php');
?>
