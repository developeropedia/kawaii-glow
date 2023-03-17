<?php

require_once "../vendor/autoload.php";

include_once "../includes/functions.php";

$stripe = new \Stripe\StripeClient(
    SECRET_KEY // replace with your API secret key
);

try {
    // Get the payment amount and token from the checkout form
    $amount = $_POST['price'] * 100; // convert to cents
    $token = $_POST['stripeToken'];

    // Charge the payment
    $charge = $stripe->charges->create([
        'receipt_email' => $_POST['email'],
        'amount' => $amount,
        'currency' => 'usd',
        'source' => $token,
        'description' => 'Payment for order', // replace with your order description
        'shipping' => [
            'name' => $_POST['name'],
            'address' => [
                'line1' => $_POST['address'],
                'city' => $_POST['city'],
                'postal_code' => $_POST['zip'],
                'country' => $_POST['country'],
            ],
        ],
    ]);

    // Payment succeeded, do something with the charge object
    // e.g. update your database with the payment status


    $msg = "success";
} catch (\Stripe\Exception\CardException $e) {
    // Payment failed because of card error
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;

} catch (\Stripe\Exception\RateLimitException $e) {
    // Too many requests made to the API too quickly
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;

} catch (\Stripe\Exception\InvalidRequestException $e) {
    // Invalid parameters were supplied to Stripe's API
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;

} catch (\Stripe\Exception\AuthenticationException $e) {
    // Authentication with Stripe's API failed
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;

} catch (\Stripe\Exception\ApiConnectionException $e) {
    // Network communication with Stripe failed
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;

} catch (\Stripe\Exception\ApiErrorException $e) {
    // Generic error occurred
    $error = $e->getError();
    $errorMessage = $error->message;
    // handle the error, e.g. show error message to user
    $msg = "Payment failed: " . $errorMessage;
}

echo $msg;