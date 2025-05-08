<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
  $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

  if ($product_id > 0 && $quantity > 0) {
    $conn = new mysqli("localhost", "root", "Nilakshana_123@", "sweet_delights");
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, name, price, image FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
      if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
      }

      if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id]['quantity'] += $quantity;
      } else {
        $_SESSION['cart'][$product_id] = [
          'name' => $product['name'],
          'price' => $product['price'],
          'image' => $product['image'],
          'quantity' => $quantity
        ];
      }
    }

    $stmt->close();
    $conn->close();
  }
}

header("Location: cart.php");
exit;
?>