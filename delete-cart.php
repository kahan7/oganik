<?php
session_start();
extract($_REQUEST);
unset($_SESSION['cart'][$productid]);
header('location: cart.php');
