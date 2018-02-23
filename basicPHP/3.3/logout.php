<?php
session_start();
session_unset();
session_destroy();
require_once './../inc/config.php';
require_once './../inc/function.php';
unsure_user_is_authenticate();
?>