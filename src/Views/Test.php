
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>
<div class="start">
        <?php if ($_SESSION["user"]): ?>
        <?php var_dump($_SESSION);die(); ?>
             <h2> Hello <?php echo $_SESSION['user']['email'];?> </h2>
        <?php else: ?>
            <h2>Hello USER! Please sing in</h2>
        <?php endif; ?>
    <div>
        <?php if ($_SESSION["user"]): ?>
                <a href="/logout/exitSes" class="btn btn-secondary w-100">Logout<a>
        <?php else: ?>
                <a href="/authuser/login" class="btn btn-primary w-100">Sing in</a>
                <a href="/adduser/User" class="btn btn-success w-100">Add new user</a>
        <?php endif; ?>

    </div>
</div>

</body>

</html>



