<!doctype html>
<html lang="en" class="h-100">
  <?php include 'inc/head.php';?>

  <body class="d-flex flex-column h-100">
    <?php include 'inc/header.php';?>

    <?php include 'inc/navbar.php';?>
    
    <main class="flex-grow-1">
      <div class="container-lg h-100">
        <div class="bg-light p-2 h-100">
          <i class="bi-alarm icon-lg"></i>
          <button type="button" class="btn btn-primary btn-lg"><i class="bi-alarm"></i> Primary</button>
          <button type="button" class="btn btn-secondary"> <i class="bi-alarm bg-dark"></i> Secondary</button>
          <button type="button" class="btn btn-success"><i class="bi-alarm text-warning"></i> Success</button>
        </div><!-- main content -->
      </div>
    </main>
      
    <?php include 'inc/footer.php';?>
      
    <script src="../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
