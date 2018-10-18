<?php
/**
 * Created by PhpStorm.
 * User: huong
 * Date: 10/18/18
 * Time: 4:00 PM
 */
$connectDB = mysqli_connect('localhost', 'root', '', 'product');
if (!$connectDB) {
    die("Connection failed: " . mysqli_connect_error());
}
