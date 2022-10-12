<html lang="en">

<head>

    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="/main/main">Test MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/user/user">Add new user</a></li>
                            <li><a class="dropdown-item" href="#">Drop user</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/user/tables">Show all users</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">

                        <?php if ($_SESSION["user"]): ?>
                        <a  class="nav-link">  Hello <?php echo $_SESSION['user']['email'];?> <a>
                                <?php endif; ?>
                    </li>
                    <?php if ($_SESSION["user"]): ?>
                    <a  class="btn btn-outline-secondary" href="/logout/exitSes">Logout<a>
                            <?php else: ?>
                                <a  class="nav-link" href="/login/login">Sing in</a>
                            <?php endif; ?>

            </div>
        </div>
    </nav>
</header>

<body>
<?php require_once $file;?>
</body>

<footer>
    <nav class="navbar me-auto fixed-bottom navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">Footer</a>
        </div>
    </nav>
</footer>
</html>