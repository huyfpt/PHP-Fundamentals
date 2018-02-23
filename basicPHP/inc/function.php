<?php
// $huy = "hello, huy";
    // function sum($a, $b) {
    //   global $huy;
    //   echo $huy;
    //     $result = $a + $b;
    //     return $result;
    // }
    // $result = sum(1, 2);
    // $res = array_column($guitars, 'name');
    function pluck($arr, $key) {
      $res = array_map(function($item) use ($key) {
        return $item[$key];
      }, $arr);
      return $res;
    }

    function output($value = '') {
        echo '<pre>';
        print_r($value); // print_r using print array
        echo '</pre>';
    }

    function authenticate_user($email, $password) {
        return $email == USER_NAME && $password == PASSWORD;
    }

    function redirect($url) {
        header("Location: $url");
    }

    function is_user_authenticate() {
        return isset($_SESSION['email']);
        die();
    }

    function unsure_user_is_authenticate() {
        if(!is_user_authenticate()) {
            redirect('login.php');
            die();
        }
    }