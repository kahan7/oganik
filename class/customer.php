<?php
require_once('connection.php');

function customer_insert($username, $fullname, $password, $email, $phone, $address, $role)
{
    $sql = "INSERT INTO customers(username,fullname,password,email,phone,address,role) VALUES(?,?,?,?,?,?,?)";
    pdo_execute($sql, $username, $fullname, $password, $email, $phone, $address, $role);
}

function customer_update($username, $fullname, $password, $email, $phone, $address)
{
    $sql = "UPDATE customers SET fullname=?,password=?,email=?,phone=?,address=? WHERE username=?";
    pdo_execute($sql, $fullname, $password, $email, $phone, $address, $username);
}

function customer_delete($customerid)
{
    $sql = "DELETE FROM customers WHERE customerid=?";
    if (is_array($customerid)) {
        foreach ($customerid as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $customerid);
    }
}

function customer_block($customerid)
{
    $sql = "UPDATE customers SET status = '1' WHERE customerid=?";
    if (is_array($customerid)) {
        foreach ($customerid as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $customerid);
    }
}
function customer_unblock($customerid)
{
    $sql = "UPDATE customers SET status = '0' WHERE customerid=?";
    if (is_array($customerid)) {
        foreach ($customerid as $ma) {
            pdo_execute($sql, $ma);
        }
    } else {
        pdo_execute($sql, $customerid);
    }
}

function customer_select_all()
{
    $sql = "SELECT * FROM customers";
    return pdo_query($sql);
}

function customer_select_email($email)
{
    $sql = "SELECT * FROM customers WHERE email=?";
    return pdo_query_one($sql, $email);
}

function select_by_user($username)
{
    $sql = "SELECT * FROM customers WHERE username=?";
    return pdo_query_one($sql, $username);
}
