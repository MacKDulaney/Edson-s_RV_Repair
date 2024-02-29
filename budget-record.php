<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <?php
    require("require/head/head_mileage-record.php");
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
          <img class="navbar-logo" src="images/Logo.png"
          />
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
    <h1>
      PNL
    </h1>
    <br /><br />
    <h3>
      Expenses
    </h3>
    <table>
      <?php
        if (isset($_SESSION['user_email'])) {
          require_once("require/connection.php");
          $conn->autocommit(FALSE);
      ?>
        <thead>
            <tr>
                <th><strong>Year</strong></th>
                <th><strong>January</strong></th>
                <th><strong>February</strong></th>
                <th><strong>March</strong></th>
                <th><strong>April</strong></th>
                <th><strong>May</strong></th>
                <th><strong>June</strong></th>
                <th><strong>July</strong></th>
                <th><strong>August</strong></th>
                <th><strong>September</strong></th>
                <th><strong>October</strong></th>
                <th><strong>November</strong></th>
                <th><strong>December</strong></th>
                <th><strong>Total</strong></th>
            </tr>
        </thead>
        <tbody>
              <?php
              require('require/budget-record/expense/budget-record_expense_2024.php');
              require('require/budget-record/expense/budget-record_expense_2023.php');
              ?>
        </tbody>
      <?php
      }
      ?>
    </table>
    <br /><br />
    <h3>
      Income
    </h3>
    <table>
      <?php
        if (isset($_SESSION['user_email'])) {
          require_once("require/connection.php");
          $conn->autocommit(FALSE);
      ?>
        <thead>
            <tr>
                <th><strong>Year</strong></th>
                <th><strong>January</strong></th>
                <th><strong>February</strong></th>
                <th><strong>March</strong></th>
                <th><strong>April</strong></th>
                <th><strong>May</strong></th>
                <th><strong>June</strong></th>
                <th><strong>July</strong></th>
                <th><strong>August</strong></th>
                <th><strong>September</strong></th>
                <th><strong>October</strong></th>
                <th><strong>November</strong></th>
                <th><strong>December</strong></th>
                <th><strong>Total</strong></th>
            </tr>
        </thead>
        <tbody>
              <?php
              require('require/budget-record/income/budget-record_income_2024.php');
              require('require/budget-record/income/budget-record_income_2023.php');
              ?>
        </tbody>
      <?php
      }
      ?>
    </table>
    <h3>
    <br /><br />
      Budget
    </h3>
    <table>
      <?php
        if (isset($_SESSION['user_email'])) {
          require_once("require/connection.php");
          $conn->autocommit(FALSE);
      ?>
        <thead>
            <tr>
                <th><strong>Year</strong></th>
                <th><strong>January</strong></th>
                <th><strong>February</strong></th>
                <th><strong>March</strong></th>
                <th><strong>April</strong></th>
                <th><strong>May</strong></th>
                <th><strong>June</strong></th>
                <th><strong>July</strong></th>
                <th><strong>August</strong></th>
                <th><strong>September</strong></th>
                <th><strong>October</strong></th>
                <th><strong>November</strong></th>
                <th><strong>December</strong></th>
                <th><strong>Total</strong></th>
            </tr>
        </thead>
        <tbody>
              <?php
              require('require/budget-record/budget/budget_2024.php');
              require('require/budget-record/budget/budget_2023.php');
              ?>
        </tbody>
      <?php
      }
      ?>
    </table>
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    </main>
    <?php
    require("require/footer.php");
    require("require/js.php");
    ?>
  </body>
</html>