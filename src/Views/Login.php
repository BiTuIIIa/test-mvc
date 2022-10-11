<?php session_start()?>
<div class="login">
    <?php if(isset($_SESSION['error'])):?>
        <div class = "alert"><?php echo $_SESSION['error'];?></div>
        <?php unset($_SESSION['error']);?>
    <?php endif; ?>

    <h1 class="text-center">Please sing in! </h1>

    <form class="validation" action="/authuser/validation" method="post">
        <div class="form-group was-validated">
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
        <input class="btn btn-success w-100" type="submit" value="SIGN IN">

    </form>

</div>


