<?php
include('vendor/autoload.php');
use Helpers\Auth;

$auth = Auth::check();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5" style="max-width: 600px; width: 100%;">
        <h1 class="mb-5 mt-5 ">
            <?= $auth->name ?>
            <span class="fw-normal text-muted">
                (<?= $auth->role ?>)
            </span>
        </h1>
        <?php if(isset($_GET['error'])):?>
            <div class="alert alert-warning ">
                Cannot Upload File
            </div>
        <?php endif ?>
        <?php if($auth->photo): ?>
            <img src="_actions/photos/<?= $auth->photo ?>" alt="Profile Photo"
            class="img-thumbnail mb-3" width="200">
        <?php endif ?>
        <form action="_actions/upload.php" enctype="multipart/form-data"
        method="post">
            <div class="input-group mb-3">
                <input type="file" class="form-control" name="photo">
                <button class="btn btn-secondary">Upload</button>
            </div>
        </form>
        <ul class="list-group">
            <li class="list-group-item mb-2 ">
                <b>Email:</b> <?= $auth->email ?>
            </li>
            <li class="list-group-item mb-2 ">
                <b>Phone:</b> <?= $auth->phone ?>
            </li>
            <li class="list-group-item mb-2 ">
                <b>Address:</b> <?= $auth->address ?>
            </li>
        </ul>

        <br>
        <a href="admin.php">Manage Users</a>
        <a href="_actions/logout.php" class="text-danger ">Logout</a>

    </div>
</body>
</html>