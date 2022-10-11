<!DOCTYPE html>
<html lang="en">

<head>

    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="/public/css/style.css">
</head>

<body>

<div class="addUser" >

    <h1 class="text-center">Please enter your data </h1>

    <form class="validation" action="/adduser/getuser" method="post">
        <div class="form-group was-validated"">
            <label class="form-label" for="first_name">Enter your first name</label>
            <input class="form-control" type="text" id="first_name" name="first_name" required>
            <div class="invalid-feedback">
                Please enter your name
            </div>
        </div>
        <div class="form-group was-validated"">
            <label class="form-label" for="password">Enter your last name</label>
            <input class="form-control" type="text" id="last_name" name="last_name" required>
            <div class="invalid-feedback">
                Please enter your last name
            </div>
        </div>
        <div class="form-group was-validated"">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" name="email" required>
            <div class="invalid-feedback">
                Please enter your email address
            </div>
        </div>
        <div class="form-group was-validated">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" required>
            <div class="invalid-feedback">
                Please enter your password
            </div>
        </div>
        <input class="btn btn-success w-100" type="submit" value="Submit">
    </form>

</div>

</body>

</html>


