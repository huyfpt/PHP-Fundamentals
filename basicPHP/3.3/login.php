<?php
    $title = 'SESSION';
    session_start();
    require_once './../inc/function.php';
    require_once './../inc/config.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
    }
    if (authenticate_user($email, $password)) {
        $_SESSION['email'] = $email;
        redirect('admin.php');
        die();
    } else {
      $status = "Plaese check! Email or password is not correct ". "</br>" 
      ."Email : ". USER_NAME. "</br>" . "Password : " . PASSWORD;
    }

    if (is_user_authenticate()) {
      redirect('admin.php');
      die();
    }

    if ($email == false) {
        $status = "Please check email is valid";
    } 
    include './../inc/header.php';
?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Post input</h1>
      </div>
    </div>
    <div class="row">
      <form action="" method="post">
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" name="email" id="email" />
        </div><div class="form-group">
          <label for="password">Password: </label>
          <input type="password" class="form-control" name="password" id="password" />
        </div>
        <div class="form-group">
          <input type="submit" value="Login"/>
        </div>
      </form>
    </div>
    <div class="row">
      <?php
        if (isset($status)) {
          echo $status;
        }
      ?>
    </div>
  </div>
<?php include './../inc/footer.php'; ?>
  