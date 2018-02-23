<?php
    $title = 'GET INPUT';
    include './../inc/header.php';
    // $category = $_GET['param_input'];
    // $limit = $_GET['limit_input'];
    $category = '';
    $limit = '';
    function getValue() {
      global $category, $limit;
      $category = filter_input(INPUT_GET, 'param_input', FILTER_VALIDATE_INT);
      $limit = filter_input(INPUT_GET, 'limit_input', FILTER_VALIDATE_INT);
      if ($category == false) {
          $category = 1;
      } 
      if ($limit == false) {
          $limit = 1;
      }
    }
?>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">Get input</h1>
      </div>
    </div>
    <div class="row">
      <?php 
      getValue()
       ?>
    Showing quantity category: <?= $category; ?> </br>
    Limit : <?= $limit ?>
    </div>
  </div>
<?php include './../inc/footer.php'; ?>
  