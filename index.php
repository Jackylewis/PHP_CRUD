<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center">
    <div class="wrap container mt-5">
        <h1 class="h3 mb-3">Login</h1>
        <?php if(isset($_GET['registered'])): ?>
            <div class="alert alert-success">
                Account Created. Please Login
            </div>
        <?php endif ?>

        <?php if(isset($_GET['suspended'])): ?>
        <div class="alert alert-danger">
            Your Account is Suspended.
        </div>
        <?php endif ?>

        <?php if(isset($_GET['incorrect'])):?>
        <div class="alert alert-warning">
            Incorrect Email Or Password
        </div>
        <?php endif ?>
        <form action="_actions/login.php" method="post">
            <input type="email" name="email"
            class="form-control mb-3 " placeholder="Email">
            <input type="password" name="password"
            class="form-control mb-3 "
            placeholder="Password">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        <a href="register.php">Register</a>
    </div>
</body>
</html>