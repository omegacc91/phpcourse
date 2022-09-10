<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>仙职风味食堂-后台</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">首页</a></li>
                    <li><a href="manage-admin.php">管理员</a></li>
                    <li><a href="manage-category.php">分类</a></li>
                    <li><a href="manage-food.php">美食</a></li>
                    <li><a href="manage-order.php">订单</a></li>
                    <li><a href="logout.php">退出</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->