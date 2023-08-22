<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/images/loader.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Admin</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>
<?php session_start(); ?>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="../store/admin_store.php" class="simple-text">
                        Admin
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../store/admin_store.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                            </svg>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../admin-account/admin_account.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                            </svg>
                            <p>Account</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../admin-category/admin_category.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                            </svg>
                            <p>Category</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../admin-product/admin_product.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-justify" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            <p>Products</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="../admin-order/admin_order.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg>
                            <p>Orders</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../index.php"> HOME </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="admin_store.php" class="nav-link" data-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
                                        <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                                        <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                                    </svg>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <div class="row" style="margin-top:20px;margin-left:10px">
                                <form action="" method="get">
                                    <input type="text" placeholder="Search" name="keyword">
                                    <button class="" type="submit">Search</button>
                                </form>
                            </div>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <?php if (isset($_SESSION['user'])) { ?>
                                        <span class="no-icon"><?= $_SESSION['user']['fullname'] ?></span>
                                    <?php  } else { ?>
                                        <span class="no-icon">Account</span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../account/logout.php">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="header">
                                    <h3 class="title">Products Management</h3><br>
                                </div>
                                <div class="content table-responsive table-full-width">
                                    <?php
                                    require_once('../class/products.php');

                                    $items = category_select_all();
                                    ?>
                                    <table class="table table-hover">
                                        <thead>
                                            <th>ID</th>
                                            <th>Products Name</th>
                                            <th>Images</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Description</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $result = "";
                                            $conn = mysqli_connect('localhost', 'root', '', 'oganik');
                                            if (!empty(($_GET['keyword']))) {
                                                $search = $_GET['keyword'];
                                                $result = mysqli_query($conn, $sql = "SELECT count(productid) AS total FROM products WHERE (CONCAT(productname,price) LIKE '%" . $search . "%')");
                                            } else {
                                                $result = mysqli_query($conn, 'select count(productid) AS total FROM products');
                                            }
                                            $row = mysqli_fetch_assoc($result);
                                            $total_records = $row['total'];
                                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $limit = 9;
                                            $total_page = ceil($total_records / $limit);
                                            if ($current_page > $total_page) {
                                                $current_page = $total_page;
                                            } else if ($current_page < 1) {
                                                $current_page = 1;
                                            }
                                            $start = ($current_page - 1) * $limit;

                                            if (!empty(($_GET['keyword']))) {
                                                $search = $_GET['keyword'];
                                                $result = mysqli_query($conn, $sql = "SELECT * FROM products WHERE (CONCAT(productname,price) LIKE '%" . $search . "%') LIMIT $start, $limit");
                                            } else {
                                                $result = mysqli_query($conn, "SELECT * FROM products LIMIT $start, $limit");
                                            }
                                            $html = '';

                                            while ($item = $result->fetch_assoc()) {
                                            ?>
                                                <tr>
                                                    <td><?= $item['productid'] ?></td>
                                                    <td><?= $item['productname'] ?></td>
                                                    <td><img src="../assets/images/products/<?= $item['images'] ?>" style="width:70px">
                                                    </td>
                                                    <td><?= number_format($item['price']) ?><sup>đ</sup></td>
                                                    <td><?= $item['quantity'] ?></td>
                                                    <td style="width:350px"><?= $item['description'] ?></td>
                                                    <td>
                                                        <a href="update_product.php?productid=<?= $item['productid'] ?>"><button class="btn btn-primary">Update</button></a>
                                                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa tài khoản này ?')" href="delete_product.php?productid=<?= $item['productid'] ?>">
                                                            <button class="btn btn-danger">Delete</button>
                                                        </a>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table><br>
                                    <a href="add_product.php"><button class="btn btn-danger">+ New Products</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="pagination" style="display: inline-block;margin-left:500px;">
                            <?php echo $html; ?>
                            <ul>
                                <?php
                                for ($i = 1; $i <= $total_page; $i++) {
                                    if ($i == $current_page) {
                                        echo '<a class="page-link" 
                                        style="color: black;float: left;padding: 8px 16px;text-decoration: none;
                                        transition: background-color .3s;border-radius: 5px;">' . $i . '</a></li> ';
                                    } else {
                                        if (isset($_GET['keyword'])) {
                                            echo '<a class="page-link" 
                                            style="color: black;float: left;padding: 8px 16px;text-decoration: none;
                                            transition: background-color .3s;border-radius: 5px;" 
                                            href="admin_product.php?keyword=' . $_GET['keyword'] . '&page=' . $i . '">' . $i . '</a></li ';
                                        } else {
                                            echo '<a class="page-link" 
                                            style="color: black;float: left;padding: 8px 16px;text-decoration: none;
                                            transition: background-color .3s;border-radius: 5px;" 
                                            href="admin_product.php?page=' . $i . '">' . $i . '</a></li>';
                                        }
                                    }
                                }
                                ?>
                            </ul>
                        </div><!-- /.text-center -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<script src="../assets/js/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.showNotification();

    });
</script>

</html>