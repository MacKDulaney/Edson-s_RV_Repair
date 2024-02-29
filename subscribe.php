<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  require("require/head/head_subscribe.php");
  ?>
  <body>
    <header>
      
    <?php
      require("require/offcanvas.php");
      require("require/googleicon.php");
    ?>
      <!-- Top NavBar Begins -->
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
          <div class="container-fluid">
            <img class="navbar-logo" src="images/Logo.png"/>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-center"
              id="navbarSupportedContent"
            >
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Head -->
                <li class="nav-item">
                  <a class="nav-link" href="index.php"
                    >Home</a
                  >
                </li>
                <!-- Contact -->
                <li class="nav-item">
                  <a class="nav-link" href="contact.php"
                    >Contact Us</a
                  >
                </li>
                <!-- Products -->
                <!--
                <li class="nav-item">
                  <a class="nav-link" href="products.php"
                    >Products</a
                  >
                </li>
                -->
                <!-- Subscribe -->
                <!--
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="subscribe.php"
                    >Subscribe</a
                  >
                </li>
                -->
              </ul>
              <!--<form class="d-flex" role="search">
                <input
                  class="form-control me-2"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                  Search
                </button>
              </form>-->
            </div>
          </div>
      </nav>
      <!-- Top NavBar Ends -->
    </header>
    <main>
      <h1>
        Click on Select to sign up for the subscription of your choice:
      </h1>
      <iframe 
      style="min-width: 360px; min-height: 500px; text-align: center; margin-left: 20px; margin-bottom: 75px;"
      src="https://me.loyalzoo.com/memberships/10904?embedded=true">
      </iframe>
    </main> 
    <?php
    require("require/footer.php");
    require("require/js.php");
    ?>
  </body>
</html>