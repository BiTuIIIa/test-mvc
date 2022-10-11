
<?php if(isset($_SESSION['error'])):?>
    <div class = "alert"><?php echo $_SESSION['error'];?></div>
    <?php unset($_SESSION['error']);?>
<?php endif; ?>
<div class="login">
    <h1 class="text-center">Please sing in</h1>

    <form class="validation" action="/authuser/validation" method="post">
        <div class="form-group was-validated">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="name@example.com" required>
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
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <input class="btn btn-primary w-10 " type="submit" value="Sign in">

    </form>

</div>


