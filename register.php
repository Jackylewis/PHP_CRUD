<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .wrap {
            width: 100%;
            max-width: 400px;
            margin: 40px auto;
        }
    </style>
</head>
<body class="text-center ">
    <div class="wrap">
        <h1 class="h3 mb-3 ">Register</h1>
        <?php if(isset($_GET['error'])): ?>
            <div class="alert alert-warning">
                Cannot create Account. Please Try Again
            </div>
        <?php endif ?>
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" class="form-control mb-2" 
            placeholder="Name" required>
            <input type="email" name="email" class="form-control mb-2"
            placeholder="Email" required>
            <input type="text" name="phone" class="form-control mb-2"
            placeholder="Phone" required>
            <textarea name="address" class="form-control mb-2" 
            placeholder="Address" required></textarea>
            <input type="password" name="password" class="form-control mb-2 "
            placeholder="password" required>
            <button type="submit" class="w-100 btn btn-primary btn-lg">
                Register
            </button>
        </form>
        <a href="_actions/login.php">Login</a>
    </div>
</body>
</html>