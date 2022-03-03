<?php

// spl_autoload_register(function($class) {
//     $path =dirname( __DIR__ ). '/' . str_replace('\\', '/', $class) . '.php';
//     if(file_exists($path)){
//         require $path;
//     }
// });

require_once '../vendor/autoload.php';

use Classes\Stripe\Payment;
use \Classes\Paypal\Payment as PaymentPaypal;
use \Colors\RandomColor;


$paymentPaypal = new PaymentPaypal;
$paymentStripe = new Payment();

var_dump(RandomColor::one());

var_dump($paymentPaypal);
var_dump($paymentStripe);
