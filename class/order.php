<?php
require_once('connection.php');

function order_select_all()
{
    $sql = "SELECT * FROM `order` ORDER BY orderid DESC";
    return pdo_query($sql);
}


function order_select_by_id($orderid)
{
    $sql = "SELECT * FROM `order` WHERE orderid=?";
    return pdo_query_one($sql, $orderid);
}



function detail_order_select_all()
{
    $sql = "SELECT * FROM order_detail ORDER BY orderid DESC";
    return pdo_query($sql);
}


function detail_order_select_by_id($orderid)
{
    $sql = "SELECT order_detail.quantity, products.price,products.productname FROM order_detail 
        JOIN products ON order_detail.productid = products.productid
        WHERE order_detail.orderid=?";
    return pdo_query($sql, $orderid);
}
function hoa_don_delete($ma_hd)
{
    $sql = "DELETE FROM hoa_don WHERE ma_hd=?";
    if (is_array($ma_hd)) {
        foreach ($ma_hd as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hd);
    }
}
function hoa_don_chi_tiet_delete($ma_hd)
{
    $sql = "DELETE FROM hoa_don_chi_tiet WHERE ma_hd=?";
    if (is_array($ma_hd)) {
        foreach ($ma_hd as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $ma_hd);
    }
}
function huy_hoa_don_insert($ma_ql, $ly_do)
{
    $sql = "INSERT INTO hoa_don(ma_ql,ly_do) VALUES(?,?)";
    pdo_execute($sql, $ma_ql, $ly_do);
}
function huy_hoa_don_select($ma_hd)
{
    $sql = "SELECT * FROM huy_hoa_don WHERE ma_hd=?";
    return pdo_query_one($sql, $ma_hd);
}
