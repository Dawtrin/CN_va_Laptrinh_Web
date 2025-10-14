<?php
session_start();
require('../model/database.php');
require('../model/product_db.php');
require('../model/category_db.php');
require('../model/product.php');
require('../model/category.php');

// Lấy action
$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'show_cart';
    }
}

switch ($action) {
    case 'add':
        $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
        $quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
        if ($quantity <= 0) $quantity = 1;

        $product = ProductDB::getProduct($product_id);
        $cost = $product->getDiscountPrice();
        $total = $cost * $quantity;

        // Lưu vào session
        $item = array(
            'id' => $product->getID(),
            'name' => $product->getName(),
            'cost' => $cost,
            'quantity' => $quantity,
            'total' => $total
        );
        $_SESSION['cart'][] = $item;

        include('cart_view.php');
        break;

    case 'show_cart':
        include('cart_view.php');
        break;

    case 'empty_cart':
        unset($_SESSION['cart']);
        include('cart_view.php');
        break;
}
?>
