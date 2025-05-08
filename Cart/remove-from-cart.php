<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;

  if ($product_id > 0 && isset($_SESSION['cart'][$product_id])) {
    unset($_SESSION['cart'][$product_id]);
    if (empty($_SESSION['cart'])) {
      unset($_SESSION['cart']);
    }
  }
}

header("Location: cart.php");
exit;
?>