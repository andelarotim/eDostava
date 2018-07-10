<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';


?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>eDostava | Košarica</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="icon" href="images/ed.png">
    <script src="js/vendor/modernizr.js"></script>
    
    <script>
    function confirmationDelete(anchor){
    var conf = confirm('Isprazniti košaricu?');
    if(conf){
        window.location=anchor.attr("href");
      }
    }
    </script>

  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">eDostava - Košarica</a></h1>
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
          <li class="active"><a href="cart.php">Moja košarica</a></li>
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
      <div class="large-12">
        <?php

          echo '<p><h3>Košarica</h3></p>';

          if(isset($_SESSION['cart'])) {

            $total = 0;
            echo '<table>';
            echo '<tr>';
            echo '<th>Šifra</th>';
            echo '<th>Naziv</th>';
            echo '<th>Količina</th>';
            echo '<th>Cijena</th>';
            echo '</tr>';
            foreach($_SESSION['cart'] as $product_id => $quantity) {

            $result = $mysqli->query("SELECT product_code, product_name, product_type, product_desc, qty, price FROM products WHERE id = ".$product_id);


            if($result){

              while($obj = $result->fetch_object()) {
                $cost = $obj->price * $quantity;
                $total = $total + $cost;

                echo '<tr>';
                echo '<td>'.$obj->product_code.'</td>';
                echo '<td>'.$obj->product_name.'</td>';
                echo '<td>'.$quantity.'&nbsp;<a class="button [secondary success alert]" style="padding:5px;" href="update-cart.php?action=add&id='.$product_id.'">+</a>&nbsp;<a class="button alert" style="padding:5px;" href="update-cart.php?action=remove&id='.$product_id.'">-</a></td>';
                echo '<td>'.$cost.' KM</td>';
                echo '</tr>';
              }
            }

          }



          echo '<tr>';
          echo '<td colspan="3" align="right">Ukupno:</td>';
          echo '<td>'.$total.' KM</td>';
          echo '</tr>';

          echo '<tr>';
          echo '<td colspan="4" align="right"><a onclick="javascript:confirmationDelete($(this));return false;" href="update-cart.php?action=empty" class="button alert">Isprazni košaricu</a>&nbsp;<a href="products.php" class="button [secondary success alert]">Dodaj još proizvoda</a>';
          if(isset($_SESSION['username'])) {
            echo '<a href="orders-update.php"><button style="float:right;">Naruči</button></a>';
          }

          else {
            echo '<a href="login.php"><button style="float:right;">Prijavi se</button></a>';
          }

          echo '</td>';

          echo '</tr>';
          echo '</table>';
        }

        else {
          echo 'Vaša košarica je trenutno prazna. <a href="products.php">Nova narudžba.</a>';
        }





          echo '</div>';
          echo '</div>';
          ?>



    <div class="row" style="margin-top:10px;">
      <div class="small-12">




        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; eDostava. All Rights Reserved.</p>
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
