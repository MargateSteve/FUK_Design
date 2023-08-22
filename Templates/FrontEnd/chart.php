<!doctype html>
<html lang="en" class="h-100">
  <?php include 'inc/head.php';?>

  <body class="d-flex flex-column h-100">
    <?php include 'inc/header.php';?>

    <?php include 'inc/navbar.php';?>
    
    <main class="flex-grow-1">
      <div class="container-lg h-100">
        <div class="bg-light p-2 h-100">
        <h2>Chart.js</h2>
          <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
        </div><!-- main content -->
      </div>
    </main>
      
    <?php include 'inc/footer.php';?>
      
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.0/dist/chart.umd.min.js"></script>
    <script src="js/chartdata.js"></script>
  </body>
</html>
