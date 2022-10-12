<div class="addUser" >

    <h2 class="text-center">Please enter data new user </h2>

    <form class="validation" action="/user/adduser" method="post">
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




