<?php
require_once('connection.php');
require_once('category.php');

function product_insert($productname, $images, $price, $quantity, $description, $categoryid)
{ //hàm thêm hàng hóa
    $sql = "INSERT INTO products(productname,images,price,quantity,description,categoryid) VALUES (?,?,?,?,?,?)"; //chèn vào bảng hh các thông tin tương ứng
    pdo_execute($sql, $productname, $images, $price, $quantity, $description, $categoryid);
}

function product_update($productid, $productname, $price, $quantity, $images, $categoryid, $description)
{ //sửa sản phẩm
    $sql = "UPDATE products SET productname=?, price=?, quantity=?, images=?, categoryid=?, description=? WHERE productid=?"; //cập nhật tt sp theo mã sp
    pdo_execute($sql, $productname, $price, $quantity, $images, $categoryid, $description, $productid);
}

function product_delete($productid)
{ //hàm xóa sp
    $sql = "DELETE FROM products WHERE productid=?"; //xóa hh theo mã hh
    if (is_array($productid)) {
        foreach ($productid as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $productid);
    }
}

function hang_hoa_check_sl($ma_hh)
{ //hàm lấy all thông tin sp trong bảng hh
    $sql = "SELECT hang_hoa.so_luong_sp AS TONGSP, hoa_don_chi_tiet.so_luong AS TONGDH FROM `hang_hoa`,`hoa_don_chi_tiet` 
    WHERE hang_hoa.ma_hh = hoa_don_chi_tiet.ma_hh and hang_hoa.ma_hh = ?"; //lấy dữ liệu từ mysql
    return pdo_query($sql, $ma_hh);
}
function tong_sp($ma_hh)
{
    $sql = "SELECT SUM(so_luong_sp) AS TONG FROM `hang_hoa` 
    WHERE ma_hh = ?"; //lấy dữ liệu từ mysql
    return pdo_query($sql, $ma_hh);
}
function tong_sp_kho($ma_hh)
{
    $sql = "SELECT hang_hoa.so_luong_sp AS TONGSP, hoa_don_chi_tiet.so_luong AS TONG FROM hang_hoa,hoa_don_chi_tiet 
    WHERE hang_hoa.ma_hh = hoa_don_chi_tiet.ma_hh WHERE ma_hh = ?"; //lấy dữ liệu từ mysql
    return pdo_query($sql, $ma_hh);
}

function hang_hoa_select_all()
{ //hàm lấy all thông tin sp trong bảng hh
    $sql = "SELECT * FROM hang_hoa ORDER BY ma_hh DESC"; //lấy dữ liệu từ mysql
    return pdo_query($sql);
}

function hang_hoa_select_all_price()
{
    $sql = "SELECT * FROM hang_hoa ORDER BY don_gia DESC LIMIT 0,9";
    return pdo_query($sql);
}

function product_select_by_id($productid)
{ //hàm lấy tt sp theo mã sp
    $sql = "SELECT * FROM products WHERE productid=?";
    return pdo_query_one($sql, $productid);
}

function product_select_by_category($categoryid)
{
    $sql = "SELECT * FROM products WHERE categoryid=?";
    return pdo_query($sql, $categoryid);
}

function search_keyword($keyword)
{
    $sql = "SELECT * FROM products pr "
        . " JOIN category ca ON ca.categoryid=pr.categoryid "
        . " WHERE productname LIKE ? OR categoryname LIKE ?";
    return pdo_query($sql, '%' . $keyword . '%', '%' . $keyword . '%');
}

function product_select_all_category()
{
    $sql = "SELECT category.categoryid, category.categoryname,"
        . " COUNT(*) quantity"
        . " FROM products "
        . " JOIN category ON category.categoryid = products.categoryid "
        . " GROUP BY category.categoryid,category.categoryname";
    return pdo_query($sql);
}
