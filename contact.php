<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <?php 
  require("require/head/head_contact.php");
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
                <a class="nav-link active" aria-current="page" href="contact.php"
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
      <div class="web-form">
          <h1>Please Fill out for Contact</h1>

          <form
          name="web-form"
          enctype="multipart/form-data"
          class="needs-validation"
          novalidate
          method="post"
          action="require/form.php"
          >
          <div class="row">
          <?php
            if (isset($_SESSION['user_email'])) {
            
              $first_name = $_SESSION['first_name'];
              $last_name = $_SESSION['last_name'];
              $user_email = $_SESSION['user_email'];
              $user_phone = $_SESSION['user_phone'];
              $user_id = $_SESSION['user_id'];

          ?>
                
          <?php
            }
            else {

              ?>
                <!-- Full Name - Text Field-->
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                        <label for="full-name">Full Name</label>
                        <input
                            type="text"
                            name="full_name"
                            id="full-name"
                            required
                            class="form-control"
                        />
                        <div class="valid-feedback">Look good!</div>
                        <div class="invalid-feedback">Please input full name</div>
                </div>

                <!-- email - email field-->
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="your_email"
                    id="email"
                    required
                    class="form-control"
                />
                <div class="invalid-feedback">
                    Email address is required. Please input a valid email address.
                </div>
                </div>

                <!-- phone - tel field-->
                <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
                <label for="phone">Phone</label>
                <input type="tel" name="phone" id="phone" class="form-control" required/>
                <div class="valid-feedback">Look good!</div>
                </div>
              <?php
            }
          ?>
              <!-- VIN - text field-->
              <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-xl-3 col-xxl-3">
              <label for="vin">VIN</label>
              <input type="text" name="vin" id="vin" class="form-control" required/>
              <div class="valid-feedback">Look good!</div>
              </div>

              <!-- Make - text field-->
              <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-xl-3 col-xxl-3">
              <label for="make">Make</label>
              <input type="text" name="make" id="make" class="form-control" required/>
              <div class="valid-feedback">Look good!</div>
              </div>

              <!-- Model - text field-->
              <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-xl-3 col-xxl-3">
              <label for="model">Model</label>
              <input type="text" name="model" id="model" class="form-control" required/>
              <div class="valid-feedback">Look good!</div>
              </div>

              <!-- Year - date field-->
              <div class="col-12 col-xs-12 col-sm-12 col-md-3 col-xl-3 col-xxl-3">
              <label for="year">Year</label>
              <input type="year" name="year" id="year" class="form-control" required/>
              <div class="valid-feedback">Look good!</div>
              </div>

              <!-- job date - date field-->
              <div class="col-12 col-xs-12 col-sm-12 col-md-4 col-xl-4 col-xxl-4">
              <label for="date">Job Date</label>
              <input
                  type="date"
                  name="job_date"
                  id="date"
                  required
                  class="form-control"
              />
              <div class="invalid-feedback">Please pick a start date.</div>
              </div>

              <!-- Images - file (upload) field -->
              <div class="col-12 col-xs-12 col-sm-12 col-md-8 col-xl-8 col-xxl-8">
              <label for="file">Upload any Images/Documents. Please provide PDF JPEG or JPG.</label>
              <input
                  type="file"
                  name="file"
                  id="file"
                  accept=".pdf, .jpeg, .jpg"
                  class="form-control"
              />
              <div class="valid-feedback">Look good!</div>
              <div class="invalid-feedback">
                  Please provide PDF JPEG or JPG.
              </div>
              </div>

              <!-- time of day - checkbox field -->
              <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-xl-6 col-xxl-6">
              <strong>Preferred Time of Day</strong><br />
              <input
                  type="checkbox"
                  name="time_of_day[]"
                  id="time-of-day-morning"
                  value=" Morning"
                  required
                  class="form-check-input checkbox"
              />
              <label for="time-of-day-morning">Morning</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input
                  type="checkbox"
                  name="time_of_day[]"
                  id="time-of-day-afternoon"
                  value=" Afternoon"
                  required
                  class="form-check-input checkbox"
              />
              <label for="time-of-day-afternoon">Afternoon</label>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

              <input
                  type="checkbox"
                  name="time_of_day[]"
                  id="time-of-day-evening"
                  value=" Evening"
                  required
                  class="form-check-input checkbox"
              />
              <label for="time-of-day-evening">Evening</label>
              </div>

              <!-- comments - textarea (multi-line) field -->
              <div class="col-12">
              <label for="about-you">Tell us about your needs.</label>
              <textarea
                  name="about_you"
                  id="about-you"
                  class="form-control"
                  required
              ></textarea>
              <div class="valid-feedback">Look good!</div>
              </div>

              <div class="col-12">
              <input
                  type="submit"
                  name="submit"
                  value="Submit Now"
                  class="submit btn btn-outline-primary"
              />
              </div>
          </div>
          </form>
      </div>
    </main> 
    <?php 
    require("require/footer.php");
    require("require/js.php");
    ?>
  </body>
</html>