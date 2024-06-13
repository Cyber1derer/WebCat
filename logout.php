<?php
session_start();
setcookie ("login_us", "", time() - 3600);
session_destroy();
header( 'Location: index.php');
exit;