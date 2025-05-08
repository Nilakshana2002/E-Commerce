<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
  $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 0;

  if ($product_id > 0 && $quantity > 0 && isset($_SESSION['cart'][$product_id])) {
    $_SESSION['cart'][$product_id]['quantity'] = $quantity;
  }
}

header("Location: cart.php");
exit;
?>