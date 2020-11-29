<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-12">
            <h2>Login Admin</h2>
            <?php if(session()->getFlashdata('msg')): ?>
            <div class="alert alert-danger"><?= base_url('admin/login/auth'); endif?></div>
            <form action="<?= base_url('admin/login/auth'); ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter password" id="pwd">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label">
                    <input class="form-check-input" value="1" name="rememberme" type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary" name="tombol">Login</button>
            </form>
        </div>
    </div>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>