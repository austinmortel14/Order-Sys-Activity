<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $foodItem = $_POST['foodItem'];
    $quantity = (int)$_POST['quantity'];

    $prices = array(
        "burger" => 50,
        "fries" => 75,
        "steak" => 150,
    );

    $totalPrice = $prices[$foodItem] * $quantity;
    $timestamp = time();
    $orderData = array(
        'timestamp' => $timestamp,
        'foodItem' => $foodItem,
        'quantity' => $quantity,
        'totalPrice' => $totalPrice
    );
    file_put_contents('orders.txt', json_encode($orderData) . "\n", FILE_APPEND);

    echo "<h2>Your Order</h2>";
    echo "<p>Food Item: $foodItem</p>";
    echo "<p>Quantity: $quantity</p>";
    echo "<p>Total Price: Php $totalPrice</p>";
    echo "<p>Order Time: " . date('Y-m-d H:i:s', $timestamp) . "</p>";
}
