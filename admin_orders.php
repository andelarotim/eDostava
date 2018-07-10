<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

if(!isset($_SESSION["username"])){
  header("location:not_logged.php");
}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eDostava | Narudžbe</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="icon" href="images/ed.png">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">eDostava - Pregled svih narudžbi</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
        <li><a href="about.php">O nama</a></li>
          <li>
            <a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Ponuda</a>
              <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
                <li style="width:100%;"><a href="products.php">Sva ponuda</a></li>
                <li style="width:100%;"><a href="products_pizza.php">Pizze</a></li>
                <li style="width:100%;"><a href="products_burger.php">Burgeri</a></li>
                <li style="width:100%;"><a href="products_pice.php">Pića</a></li>
                <li style="width:100%;"><a href="products_cevapi.php">Ćevapi</a></li>
                <li style="width:100%;"><a href="products_prilog.php">Prilozi</a></li>
              </ul>
          </li>
          <li><a href="cart.php">Moja košarica</a></li>
          <li><a href="orders.php">Moje narudžbe</a></li>
          <li><a href="contact.php">Kontakt</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li class="active"><a href="account.php">Moj račun</a></li>';
            echo '<li><a href="logout.php">Odjavi se</a></li>';
          }
          else{
            echo '<li><a href="login.php">Prijavi se</a></li>';
            echo '<li><a href="register.php">Registriraj se</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="large-12">
        <h3>Narudžbe</h3>
        <hr>

        <?php
          $i=0;
          $user = $_SESSION["username"];
          $result = $mysqli->query("SELECT * from orders ORDER BY id DESC");
          if($result) {
            while($obj = $result->fetch_object()) {
              if($i%2==0)
              {
                echo '<div style="background-color:#cce6ff; padding-left:15px; border-radius:10px;">';
                echo '<p><h4>ID Narudžbe : '.$obj->id.'</h4></p>';
                echo '<p><strong>Email korisnika</strong>: '.$obj->email.'</p>';
                echo '<p><strong>Datum i vrijeme narudžbe</strong>: '.$obj->date.'</p>';
                echo '<p><strong>Naziv proizvoda</strong>: '.$obj->product_name.'</p>';
                echo '<p><strong>Cijena proizvoda</strong>: '.$obj->price.' '.$currency.'</p>';
                echo '<p><strong>Količina naručenog proizvoda</strong>: '.$obj->units.'</p>';
                echo '<p><strong>Ukupno</strong>: '.$obj->total.' '.$currency.'</p>';
                echo '</div>';
                echo '<p><hr></p>';
              }
              else
              {
                echo '<div style="background-color:#e6f3ff; padding-left:15px; border-radius:10px;">';
                echo '<p><h4>ID Narudžbe : '.$obj->id.'</h4></p>';
                echo '<p><strong>Email korisnika</strong>: '.$obj->email.'</p>';
                echo '<p><strong>Datum i vrijeme narudžbe</strong>: '.$obj->date.'</p>';
                echo '<p><strong>Naziv proizvoda</strong>: '.$obj->product_name.'</p>';
                echo '<p><strong>Cijena proizvoda</strong>: '.$obj->price.' '.$currency.'</p>';
                echo '<p><strong>Količina naručenog proizvoda</strong>: '.$obj->units.'</p>';
                echo '<p><strong>Ukupno</strong>: '.$obj->total.' '.$currency.'</p>';
                echo '</div>';
                echo '<p><hr></p>';
              }
              $i++;
            }
          }
        ?>
      </div>
    </div>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; eDostava. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
