<?php
require_once('../class/customer.php');

extract($_REQUEST);

customer_block($customerid);

header('location: admin_account.php');
