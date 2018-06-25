<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eDostava | Niste prijavljeni!</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="icon" href="images/ed.png">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">eDostava - Niste prijavljeni!</a></h1>
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
            echo '<li><a href="account.php">Moj račun</a></li>';
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
      <div style="background-color:#ff704d; border-radius: 10px; padding:5px;"class="small-12">
        <p>Nije moguće pregledati izvršene narudžbe ukoliko niste prijavljeni. <a href="login.php">Prijavite se.</a></p>
        <p>Nemate račun? <a href="register.php">Registrirajte se</a>.</p>


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
