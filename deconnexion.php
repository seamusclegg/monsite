<?php
//on tue le cookie
setcookie('sid',"",  time()-3600);
header("location: index.php");



?>
