<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-3">
    <div class="container">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="snake.php" class="nav-item nav-link">Gaming</a>
                <a href="store.php" class="nav-item nav-link">Store</a>
                <a href="news.php" class="nav-item nav-link">News</a>
                <a href="Blog.php" class="nav-item nav-link">Blog</a>

            </div>
            <div class="navbar-nav ml-auto">
                <?php if(isUserLoggedIn()) { ?>
                    <span class="nav-item nav-link text-light">
                        Welcome, <?php echo $_SESSION[USER_SESSION_KEY]['firstname']; ?>
                    </span>
                    <a href="logout.php" class="nav-item nav-link">Logout</a>
                <?php } else { ?>
                    <a href="register.php" class="nav-item nav-link">Register</a>
                    <a href="login.php" class="nav-item nav-link">Login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
