<?php
    $title = 'include';
    include './../inc/header.php';
    $guitars = [
       ['name' => 'Vela', 'type' => 'nomal'],
       ['name' => 'Explorer', 'type' => 'classical'],
       ['name' => 'Strat', 'type' => 'model']
    ];
    
    require_once './../inc/function.php';
    $arr_names = pluck($guitars, 'name') ;
?>


    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="mt-5"></h1>
        </div>
      </div>
      <div class="row">
      <?php 
        output($arr_names);
      ?>
      </div>
    </div>
<?php include './../inc/footer.php'; ?>
  