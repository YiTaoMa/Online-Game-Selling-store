<?php require_once('fragment/functions.inc.php'); ?>
<?php
    $errors = [];
    if(isset($_POST['login'])) {
        $errors = loginUser($_POST);

        if(count($errors) === 0) {
            header('Location: news.php');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('fragment/head.inc.php'); ?>
</head>
<body>
    <?php require_once('fragment/nav.inc.php'); ?>

    <div class="container">
        <div class="col-md-6">
            <form method="post">
                <div class="form-group">
                    <label for="lastname">Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        <?php displayValue($_POST, 'email'); ?> />
                    <?php displayError($errors, 'email'); ?>
                </div>

                <div class="form-group">
                    <label for="phone">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="At least 6 characters" />
                    <?php displayError($errors, 'password'); ?>
                </div>

                <button type="submit" class="btn btn-primary" name="login" value="login">Login</button>
            </form>
        </div>

        <?php require_once('fragment/footer.inc.php'); ?>
    </div>
</body>
</html>
