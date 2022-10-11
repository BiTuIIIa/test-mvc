<!DOCTYPE html>
<html lang="en">

<head>

    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">Test MVC</a>
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
                            <li><a class="dropdown-item" href="/adduser/user">Add new user</a></li>
                            <li><a class="dropdown-item" href="#">Drop user</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/adduser/showuser">Show all users</a></li>
                        </ul>

                    </li>

                </ul>
                <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sing in/Sing out
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="/authuser/login">Sing in</a></li>
                            <li><a class="dropdown-item" href="#">Sing out</a></li>

                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
</header>
<section>
    <div class="container-xxl">

    <div class="row align-items-center">
        <div class="col-7">
            <h2>Welcome to site</h2>
            <p> Здесь будет создаваться сайт</p>

        </div>
        <div class="col-5"><img class="w-100" src = "https://kartinkin.net/uploads/posts/2022-03/1646517098_1-kartinkin-net-p-kartinki-dlya-internet-magazina-1.jpg" alt="Shop"></div>
    </div>

    </div>
</section>


<body>

</body>

<footer>
    <nav class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="#">Footer</a>
        </div>
    </nav>
</footer>
</html>
