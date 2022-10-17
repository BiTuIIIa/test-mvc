<div class="container" >
    <h2 class="text-center">Please enter data new user </h2>

    <form action="/user/adduser" method="post">
        <div >
            <label class="form-label" for="first_name">Enter your first name</label>
            <input class="form-control" type="text" id="first_name"  name="first_name" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Enter your last name</label>
            <input class="form-control" type="text" id="last_name" name="last_name" required>
        </div>
        <div class="form-group ">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" required>
        </div>
        <input class="btn btn-success w-100" type="submit" value="Submit">
    </form>

</div>




