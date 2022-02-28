<?php
    $servername = "localhost";
    $user = "root";
    $pwd = "Acceleator2018";
    $dbname = "test";

    $username1 = $_POST["username"];
    $password1 = md5($_POST["password"]);

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$user, $pwd);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO test.user(username,password) VALUES ($username1,$password1)";
        $conn->exec($sql);
        echo "注册成功!";
        $conn = null;
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }