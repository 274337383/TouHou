<?php
//  表单提交后...
$posts = $_POST;
//  清除一些空白符号
foreach ($posts as $key => $value) {
    $posts[$key] = trim($value);
}
$password = md5($posts["password"]);
$username = $posts["username"];

$query = "SELECT 'username' FROM 'user' WHERE 'password' = '$password' AND 'username' = '$username'";

