<!doctype html>
<html lang="en" class="h-100">
  <?php include 'inc/head.php';?>

  <body class="d-flex flex-column h-100">
    <?php include '../functions/global.php';?>
    <?php include 'inc/header.php';?>

    <?php include 'inc/navbar.php';?>
    
    <main class="flex-grow-1">
      <div class="container-lg h-100">
        <div class="bg-light p-2 h-100">
          <h2> From srb-dashboard </h2>
          <?php
          foreach (srb_bootstrap_colours() as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour .' p-1">'.$class.'</span> ';
          }
          ?>

          <h2> From fuk_shared </h2>
          <h3> Site Colours </h3>
          <?php
          foreach (fuk_site_colours() as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour.' p-1">'.$class.'</span> ';
          }
          ?>

          <h3> Fixture Colours </h3>
          <?php
          foreach (fuk_fixture_status_colours() as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour.' p-1">'.$class.'</span> ';
          }
          ?>

          <h3> Outcome Colours </h3>
          <?php
          foreach (fuk_match_outcome_colours() as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour.' p-1">'.$class.'</span> ';
          }
          ?>

          <h3> All Colours </h3>
          <?php
          $allcolours = array_merge(srb_bootstrap_colours(), 
                                    fuk_site_colours(), 
                                    fuk_fixture_status_colours(),
                                    fuk_match_outcome_colours());
          foreach ($allcolours as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour.' p-1 mb-2">'.$class.'</span> ';
          }
          ?>


        </div><!-- main content -->
      </div>
    </main>
      
    <?php include 'inc/footer.php';?>
      
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
