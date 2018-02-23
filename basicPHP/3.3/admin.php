<?php
 session_start();
 require_once './../inc/config.php';
 require_once './../inc/function.php';
 unsure_user_is_authenticate();
 echo $_SESSION['email'];
?>