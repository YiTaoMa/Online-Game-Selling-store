<?php require_once('fragment/functions.inc.php'); ?>
<?php
    $errors = [];
    if(isset($_POST['register'])) {
        $errors = registerUser($_POST);

        if(count($errors) === 0) {
            header('Location: login.php');
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
                    <label for="firstname">*First name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname"
                        <?php displayValue($_POST, 'firstname'); ?> />
                    <?php displayError($errors, 'firstname'); ?>
                </div>

                <div class="form-group">
                    <label for="lastname">*Last name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname"
                        <?php displayValue($_POST, 'lastname'); ?> />
                    <?php displayError($errors, 'lastname'); ?>
                </div>

                <div class="form-group">
                    <label for="lastname">*Email</label>
                    <input type="text" class="form-control" id="email" name="email"
                        <?php displayValue($_POST, 'email'); ?> />
                    <?php displayError($errors, 'email'); ?>
                </div>

                <div class="form-group">
                    <label for="phone">*Phone number</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        <?php displayValue($_POST, 'phone'); ?> />
                    <?php displayError($errors, 'phone'); ?>
                </div>

                <div class="form-group">
                    <label for="phone">*Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                        placeholder="At least 6 characters" />
                    <?php displayError($errors, 'password'); ?>
                </div>

                <div class="form-group">
                    <label for="phone">*Confirm password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" />
                    <?php displayError($errors, 'confirmPassword'); ?>
                </div>

                <button type="submit" class="btn btn-primary" name="register" value="register">Register</button>
                <a href="index.php" class="btn btn-secondary ml-5">Cancel</a>
            </form>
        </div>

        <?php require_once('fragment/footer.inc.php'); ?>
    </div>
</body>
</html>
