<?php
//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

if(isset($_SESSION['cart'])) {

  $total = 0;

  foreach($_SESSION['cart'] as $product_id => $quantity) {

    $result = $mysqli->query("SELECT * FROM products WHERE id = ".$product_id);

    if($result){

      if($obj = $result->fetch_object()) {


        $cost = $obj->price * $quantity;

        $user = $_SESSION["username"];

        $query = $mysqli->query("INSERT INTO orders (product_code, product_name, product_desc, price, units, total, email) VALUES('$obj->product_code', '$obj->product_name', '$obj->product_desc', $obj->price, $quantity, $cost, '$user')");

        if($query){
          $newqty = $obj->qty - $quantity;
          if($mysqli->query("UPDATE products SET qty = ".$newqty." WHERE id = ".$product_id)){

          }
        }

        //slanje maila
        /*$query = $mysqli->query("SELECT * from orders order by date desc");
        if($query){
          while ($obj = $query->fetch_object()){
            $subject = "Nova narudžba ".$obj->id;
            $message = "<html><body>";
            $message .= '<p><h4>ID narudžbe->'.$obj->id.'</h4></p>';
            $message .= '<p><strong>Datum naručivanja</strong>: '.$obj->date.'</p>';
            $message .= '<p><strong>Naziv proizvoda</strong>: '.$obj->product_name.'</p>';
            $message .= '<p><strong>Cijena po proizvodu</strong>: '.$obj->price.'</p>';
            $message .= '<p><strong>Količina</strong>: '.$obj->units.'</p>';
            $message .= '<p><strong>Ukupno</strong>: '.$obj->total.'</p>';
            $message .= "</body></html>";
            $headers = "From: support@edostava.com";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

            $sent = mail($user, $subject, $message, $headers) ;
            if($sent){
              $message = "";
            }
            else {
              echo 'Greška!';
            }
          }
        }*/



      }
    }
  }
}

unset($_SESSION['cart']);
header("location:success.php");

?>
