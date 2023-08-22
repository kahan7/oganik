<?php
require_once('connection.php');

// Insert dữ liệu vào bảng loại hàng
function category_insert($categoryname)
{
    // $sql = "INSERT INTO category(categoryname) VALUES (?)";
    // pdo_execute($sql, $categoryname);
    $sql = "INSERT INTO category(categoryname) SELECT (?)
    WHERE NOT EXISTS (SELECT * FROM category WHERE categoryname = (?))";
    pdo_execute($sql, $categoryname);
}

// Cập nhật dữ liệu vào bảng loại hàng
function category_update($categoryid, $categoryname)
{
    $sql = "UPDATE category SET categoryname=? WHERE categoryid=?";
    pdo_execute($sql, $categoryname, $categoryid);
}

// Xóa dữ liệu theo mã loại hàng
function category_delete($categoryid)
{
    $sql = "DELETE FROM category WHERE categoryid=?";
    if (is_array($categoryid)) {
        foreach ($categoryid as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $categoryid);
    }
}

// Select toàn bộ dữ liệu bảng loại hàng
function category_select_all()
{
    $sql = "SELECT * FROM category ORDER BY categoryid ASC";
    return pdo_query($sql);
}

// Select dữ liệu bảng loại hàng theo mã loại hàng
function category_select_by_id($categoryid)
{
    $sql = "SELECT * FROM category WHERE categoryid=?";
    return pdo_query_one($sql, $categoryid);
}
function category_select_by_name($categoryname)
{
    $sql = "SELECT categoryname FROM category WHERE categoryname=?";
    return pdo_query_one($sql, $categoryname);
}
