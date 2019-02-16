<?php
  require "header.php";
?>

  <!-- Login Form -->
  <main>
  <div class="wrapper-main">
    <section class="section-default">
      <?php 
        if (isset($_SESSION['userId'])) {
          echo '<p class="login-status">You are logged in!</p>';
        } else {
          echo '';
        }
      ?>
    </section>
    </div>
  </main>
