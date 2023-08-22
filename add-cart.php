<?php
$lifetime = 60 * 60 * 24 * 365;
session_set_cookie_params($lifetime, '/');
session_start();

require_once('./class/products.php');
extract($_REQUEST);
$item = product_select_by_id($productid);
extract($item);

if (!empty($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    // Kiểm tra lần thứ 2 mua hàng đã có id phần tử mảng hay chưa dùng hàm array_key_exists
    if (array_key_exists($productid, $cart)) {
        $cart[$productid] = array(
            "sl" => (int)$cart[$productid]["sl"] + 1,
            "price" => $price,
            "productname" => $productname,
            "images" => $images,
            "productid" => $productid,
            "quantity" => $quantity,


        );
    } else {
        $cart[$productid] = array(
            "sl" => 1,
            "price" => $price,
            "productname" => $productname,
            "images" => $images,
            "productid" => $productid,
            "quantity" => $quantity,

        );
    }
} else {
    // Lần đầu tiên mua hàng
    $cart[$productid] = array(
        "sl" => 1,
        "price" => $price,
        "productname" => $productname,
        "images" => $images,
        "productid" => $productid,
        "quantity" => $quantity,

    );
}
$_SESSION['cart'] = $cart;


header('location: cart.php');
