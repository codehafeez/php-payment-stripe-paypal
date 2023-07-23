<?php 


// STRIPE
define('STRIPE_API_KEY', '***************************************'); 
define('STRIPE_PUBLISHABLE_KEY', '*******************************'); 
define('STRIPE_SUCCESS_URL', 'http://localhost/payment-stripe-paypal/stripe-success.php');
define('STRIPE_CANCEL_URL', 'http://localhost/payment-stripe-paypal/stripe-cancel.php'); 


// PayPal
define('PAYPAL_EMAIL', '*******************************************');
define('PAYPAL_URL', 'https://www.sandbox.paypal.com/cgi-bin/webscr');
define('PAYPAL_SUCCESS_URL', 'http://localhost/payment-stripe-paypal/paypal-success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/payment-stripe-paypal/paypal-cancel.php');


?>