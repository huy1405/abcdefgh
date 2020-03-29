<?php
$ketnoi['host'] = 'us-cdbr-iron-east-01.cleardb.net';
$ketnoi['dbname'] = 'data'; // Tên database
$ketnoi['username'] = 'be1c83d7677d21'; // Tên user mặc định là root
$ketnoi['password'] = 'c1c34f5e'; // Password để trống
@mysql_connect(
"{$ketnoi['host']}",
"{$ketnoi['username']}",
"{$ketnoi['password']}")
or
die("Không thể kết nối database");
@mysql_select_db(
"{$ketnoi['dbname']}")
or
die("Không thể chọn database");
?>