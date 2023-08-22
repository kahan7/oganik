<?php
session_start();
extract($_REQUEST);
if (array_key_exists('btn-update', $_REQUEST)) {
    foreach ($sl as $key => $value) {
        $_SESSION['cart'][$key]['sl'] = $value;
    }
}
header('location: cart.php');
