<?php
require_once('../class/products.php');

extract($_REQUEST);

product_delete($productid);

header('location: admin_product.php');
