<?php
require_once('../class/customer.php');

extract($_REQUEST);

customer_delete($customerid);

header('location: admin_account.php');
