<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  require("require/head/head_products.php");
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
              <!-- Home -->
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
                <a class="nav-link active" aria-current="page" href="products.php"
                  >Products</a
                >
              </li>
              -->
              <!-- Subscribe -->
              <!--
              <li class="nav-item">
                <a class="nav-link" href="subscribe.php"
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
      <h1>Products<h1/>
      
      <!-- Begin Fancyapp and Isotope -->
      <div class="container isotope-filter">
        <h2>RV Services</h2>

        <!-- Filter Buttons Begins -->
        <div class="button-group filters-button-group">
          <button class="button is-checked" data-filter="*">show all</button>
          <button class="button" data-filter=".plumbing">
            plumbing
          </button>
          <button class="button" data-filter=".eletrical">
            electrical
          </button>
          <button class="button" data-filter=".appliances">
            appliances
          </button>
        </div>
        <div class="row">
          <!-- Grid Begins -->
          <div class="grid">
            <div
              class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4"
            >
              <!-- Plumbing Card -->
              <div class="card element-item plumbing" style="width: 18rem;">
                <img
                    src="images/isotope/plumbing.jpeg"
                    class="card-img-top"
                    alt="plumbing"
                  />
                <div class="card-body">
                  <h5 class="card-title">Plumbing</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <a href="products.html#plumbing" class="btn btn-primary"
                    >Shop</a
                  >
                </div>
              </div>
              <!-- end Card -->
            </div>

            <div
              class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4"
            >
              <!-- Appliances Card -->
              <div class="card element-item appliances" style="width: 18rem;">
                <img
                    src="images/isotope/appliances.jpeg"
                    class="card-img-top"
                    alt="Appliances"
                  />
                <div class="card-body">
                  <h5 class="card-title">Appliances</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <a href="products.html#appliances" class="btn btn-primary"
                    >Shop</a
                  >
                </div>
              </div>
              <!-- end Card -->
            </div>

            <div
              class="col-12 col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4"
            >
              <!-- Eletrical Card -->
              <div class="card element-item eletrical" style="width: 18rem;">
                <img
                    src="images/isotope/electrical.jpeg"
                    class="card-img-top"
                    alt="Electrical"
                  />
                <div class="card-body">
                  <h5 class="card-title">Electrical</h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make
                    up the bulk of the card's content.
                  </p>
                  <a href="products.html#electrical" class="btn btn-primary"
                    >Shop</a
                  >
                </div>
              </div>
              <!-- Card -->
            </div>
          </div>
          <!-- Grid Ends-->
        </div>
      </div>
      <!-- End Fancyapp and Isotope -->

      
      <h2 id="plumbing">Plumbing<h2/>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <h2 id="electrical">Electical<h2/>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <h2 id="appliances">Appliances<h2/>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br /><h2 id="roof">Roof<h2/>
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
    </main> 
    <?php
    require("require/footer.php");
    require("require/js.php");
    ?>
  </body>
</html>