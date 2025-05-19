<!doctype html>
<html lang="en">
  <?php include 'inc/head.php';?>
  <body class="">
  <?php include '../../inc/functions/global.php';?>
    <?php include 'inc/header.php';?>
    <div class="container-fluid">
      <div class="row d-flex">
        <?php include 'inc/left.php'; ?>

        <main class="flex-shrink-1">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h1">Custom Css</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>
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
          echo '<p>';                          
          foreach ($allcolours as $key=>$value) {
            $class = 'bg-'.$key;
            $textcolour = ' text-'.$value;
            echo '<span class="'.$class.$textcolour.' p-1 mb-2">'.$class.'</span> ';
            if(in_array($key, ['dark-nav', 'fixture-status-vd'])){
              echo '</p><p>';
            }
          }
          echo '</p>'; 
          ?>
        </main>

        <?php include 'inc/right.php'; ?> 
      </div>
    </div>
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>
    <script src="js/basic-dashboard.js"></script>
    
  </body>
</html>
