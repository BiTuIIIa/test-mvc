<?php use Libs\Model;
$pdo = new Model();
$params['id'];
$user = $pdo->connection->query("SELECT * FROM `adduser` WHERE `id`='{$params['id']}'; ")->fetch(PDO::FETCH_ASSOC);
var_dump($user);
?>


<div class="container" >
    <h2 class="text-center">Edit data user </h2>
    <form action="/user/edit" method="post">
        <div>
            <input type="hidden" name ="id" value="<?php echo $params['id']; ?>" >
        </div>
        <div >
            <label class="form-label" for="first_name">Enter first name</label>
            <input class="form-control" type="text" id="first_name"  name="first_name" value="<?= $user['first_name']; ?>" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Enter last name</label>
            <input class="form-control" type="text" id="last_name" name="last_name" value="<?= $user['last_name'];?> " required>
        </div>
        <div class="form-group ">
            <label class="form-label" for="email">Email address</label>
            <input class="form-control" type="email" id="email" name="email" value="<?= $user['email'];?>" required>
        </div>

        <input class="btn btn-danger w-100" type="submit" value="Edit">
    </form>

</div>




