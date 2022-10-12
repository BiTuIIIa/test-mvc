<div class="login">
    <?php if(isset($_SESSION['error'])):?>
        <div class = "alert"><?php echo $_SESSION['error'];?></div>
        <?php unset($_SESSION['error']);?>
    <?php endif; ?>
    <h1 class="text-center">Please sing in</h1>

    <form class="validation" action="/login/validation" method="post">
        <div class="form-group was-validated">
            <label class="form-label" for="email"></label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Email address" required>
            <div class="invalid-feedback">
                Please enter your email address
            </div>
        </div>
        <div class="form-group was-validated">
            <label class="form-label" for="password"></label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Password" required>
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


