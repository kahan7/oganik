<?php
require_once('../class/customer.php');

extract($_REQUEST);

customer_unblock($customerid);

header('location: admin_account.php');
