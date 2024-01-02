<?php

use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UserTable;

include("../vendor/autoload.php");

$data = [
    "name" => $_POST['name'] ?? 'Unknown',
    "email" => $_POST['email'] ?? 'Unknown',
    "phone" => $_POST['phone'] ?? 'Unknown',
    "address" => $_POST['address'] ?? 'Unknown',
    "password" => md5($_POST['password']),
    "role_id" => 1,
];

$table = new UserTable(new MySQL());

if($table) {
    $table-> insert($data);
    HTTP::redirect("/index.php", "registered=true");
}else{
    HTTP::redirect("/register.php", "error=true");
}