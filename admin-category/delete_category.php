<?php
require_once('../class/category.php');

extract($_REQUEST);

category_delete($categoryid);

header('location: admin_category.php');
