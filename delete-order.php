<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once('./class/order.php');
    extract($_REQUEST);
    $item = order_select_by_id($orderid);
    extract($item);

    $orderid = $orderid;
    $datetimes = $datetimes;
    $note = $note;
    $order_status = 0;
    $cancle_order = 1;
    $customerid = $customerid;
    $conn = pdo_get_connection();
    $sql = "UPDATE `order` SET datetimes = '" . $datetimes . "',note = '" . $note . "',order_status = '" . $order_statuss
        . "',customerid = '" . $customerid . "',cancle_order = '" . $cancle_order . "'   WHERE orderid = '" . $orderid . "'";
    $conn->exec($sql);

    header('location: history.php');
    ?>
</body>

</html>