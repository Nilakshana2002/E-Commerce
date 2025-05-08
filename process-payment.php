<?php
session_start();
require_once 'vendor/autoload.php'; // Stripe PHP library

\Stripe\Stripe::setApiKey('sk_test_your_secret_key'); // Replace with your Stripe secret key

header('Content-Type: application/json');

try {
  $data = json_decode(file_get_contents('php://input'), true);
  $payment_method_id = $data['payment_method_id'];
  $amount = $data['amount'];
  $currency = $data['currency'];

  $paymentIntent = \Stripe\PaymentIntent::create([
    'amount' => $amount,
    'currency' => $currency,
    'payment_method' => $payment_method_id,
    'confirmation_method' => 'manual',
    'confirm' => true,
  ]);

  if ($paymentIntent->status === 'succeeded') {
    // Clear the cart
    unset($_SESSION['cart']);
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['error' => 'Payment failed']);
  }
} catch (\Stripe\Exception\CardException $e) {
  echo json_encode(['error' => $e->getMessage()]);
} catch (Exception $e) {
  echo json_encode(['error' => 'An error occurred']);
}
?>