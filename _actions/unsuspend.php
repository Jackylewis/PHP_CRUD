<?php

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UserTable;

include("../vendor/autoload.php");

$auth = Auth::check();
$table = new UserTable(new MySQL());

$id = $_GET['id'];
$table->unsuspend($id);
HTTP::redirect("/admin.php");