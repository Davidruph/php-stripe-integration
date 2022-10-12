<?php

require_once('vendor/autoload.php');
$stripe = new \Stripe\StripeClient("{stripe secret key");


require 'dbconn.php';
if (isset($_POST['email'])) {
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $address = $_POST['address'];
   $amount = $_POST['amount'];
   $currency = $_POST['currency'];
   $cents = $amount * 100;

    $sql = mysqli_query($conn, "INSERT INTO payment_list (email, phone, firstname, lastname, address, amount, currency) VALUES ('$email', '$phone', '$firstname', '$lastname', '$address', '$amount', '$currency')");

    $session = $stripe->checkout->sessions->create([
        'success_url' => 'http://localhost/thankyou.php',
        'cancel_url' => 'http://localhost/donate.php',
        'line_items' => [[
            'price_data' => [
                'product_data' => [
                    'name' => 'Donations',
                    
                ],
                'unit_amount' => $cents,
                'currency' => $currency,
            ],
            'quantity' => 1,
        ]],
        'payment_method_types' => ['card'],
        'mode' => 'payment',
      ]);
      echo $session['url'];

}
?>