<!doctype html>
<html lang="en" class="h-100">
  <?php include 'inc/head.php';?>

  <body class="d-flex flex-column h-100">
    <?php include 'inc/header.php';?>

    <?php include 'inc/navbar.php';?>
    
    <main class="flex-grow-1">
      <div class="container-lg h-100">
        <div class="bg-light p-2 h-100">
          <h1> Mega Menu</h1>
          <nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Bootstrap <span class="badge bg-primary">v5.2.0-beta1</span></a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
        <div class="hamburger-toggle">
          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Multilevel</a>
            <ul class="dropdown-menu shadow">
              <li><a class="dropdown-item" href="#">Gallery</a></li>
              <li><a class="dropdown-item" href="blog.html">Blog</a></li>
              <li class="dropstart">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Submenu Left</a>
 <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Third level 1</a></li>
                  <li><a class="dropdown-item" href=""> Third level 2</a></li>
                  <li><a class="dropdown-item" href=""> Third level 3</a></li>
                  <li><a class="dropdown-item" href=""> Third level 4</a></li>
                  <li><a class="dropdown-item" href=""> Third level 5</a></li>
                </ul>
              </li>
              <li class="dropend">
                <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Submenu Right</a>
                <ul class="dropdown-menu shadow">
                  <li><a class="dropdown-item" href=""> Second level 1</a></li>
                  <li><a class="dropdown-item" href=""> Second level 2</a></li>
                  <li><a class="dropdown-item" href=""> Second level 3</a></li>
                  <li class="dropend">
                    <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside">Let's go deeper!</a>
                    <ul class="dropdown-menu dropdown-submenu shadow">
                      <li><a class="dropdown-item" href=""> Third level 1</a></li>
                      <li><a class="dropdown-item" href=""> Third level 2</a></li>
                      <li><a class="dropdown-item" href=""> Third level 3</a></li>
                      <li><a class="dropdown-item" href=""> Third level 4</a></li>
                      <li class="dropend">
                        <a href="#" class="dropdown-item dropdown-toggle" data-bs-toggle="dropdown">Still don't have enough? Go much deeper!</a>
                        <ul class="dropdown-menu dropdown-submenu shadow">
                          <li><a class="dropdown-item" href=""> Third level 1</a></li>
                          <li><a class="dropdown-item" href=""> Third level 2</a></li>
                          <li><a class="dropdown-item" href=""> Third level 3</a></li>
                          <li><a class="dropdown-item" href=""> Third level 4</a></li>
                          <li><a class="dropdown-item" href=""> Third level 5</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href=""> Third level 5</a></li>
                </ul>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown dropdown-mega position-static">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Megamenu</a>
            <div class="dropdown-menu shadow">
              <div class="mega-content px-4">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Pages</h5>
                      <div class="list-group">
                        <a class="list-group-item" href="#">Accomodations</a>
                        <a class="list-group-item" href="#">Terms & Conditions</a>
                        <a class="list-group-item" href="#">Privacy</a>
                      </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Card</h5>
                      <div class="card">
                  <img src="https://via.placeholder.com/320x180" class="img-fluid" alt="image">
                  <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-3 py-4">
                      <h5>Lot of Pages</h5>
                      <p>Lorem ipsum dolo sit achmet muhamed borlan de irtka.
                    </div>
                    <div class="col-12 col-sm-12 col-md-3 py-4">
                      <h5>Damn, so many</h5>
                      <div class="list-group">
                        <a class="list-group-item" href="#">Accomodations</a>
                        <a class="list-group-item" href="#">Terms & Conditions</a>
                        <a class="list-group-item" href="#">Privacy</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex ms-auto">
            <div class="input-group">
                <input class="form-control border-0 mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary border-0" type="submit">Search</button>
            </div>
        </form>
      </div>
    </div>
  </nav>

  <section class="my-5">
    <div class="container">
      <div class="p-4 border">
        <h1>Bootstrap <span class="text-primary">5.2.0-beta1</span> Navbar Multi Level and Mega Menu</h1>
        <p class="lead">This example shows a Navbar component of the Bootstrap Framework version 5 with the following features:</p>
        <ul>
            <li>No extra JavaSript required</li>
            <li>Multi Level Menu</li>
            <li>Responsive Mega Menu</li>
            <li>Unlimited Levels possible!</li>
            <li>Animated Hamburger Menu for Mobile Devices (with JavaScript)</li>
        </ul>
        <div class="alert alert-info"><strong>Updated:</strong> Now compatible with Bootstrap 5.2.0-beta1</div>
      <hr>
      <p>If you have any questions, feel free to contact me: <a href="https://simon-koehler.com/contact" target="_blank">https://simon-koehler.com/contact</a></p>
    </div>
    </div>
  </section>

  <footer class="bg-dark p-4 text-white text-center">
    <small>(c) 2020-2022 Written by Simon Köhler in Panama</small>
    <div class="icons">
        <a href="https://simon-koehler.com/" target="_blank">
              <i class="fa fa-globe"></i>
            </a>
        <a href="https://www.linkedin.com/in/typo3-freelancer/" target="_blank">
              <i class="fab fa-linkedin"></i>
            </a>
        <a href="https://typo3.com/partners/professional-service-listing/detail/typo3-freelancer" target="_blank">
              <i class="fab fa-typo3"></i>
            </a>
        <a href="https://instagram.com/typo3freelancer" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
        <a href="https://github.com/koehlersimon/" target="_blank">
              <i class="fab fa-github"></i>
            </a>
        <a href="https://www.youtube.com/channel/UC_PtQESDvj-GZNeo9LarRuA?view_as=subscriber" target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
      </div>
  </footer>
        </div><!-- main content -->
      </div>
    </main>
      
    <?php include 'inc/footer.php';?>
      
    <script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
