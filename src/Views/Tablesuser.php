<div class="container-xxl">
<table class="table table-hover table-bordered ">
    <thead class="table-light">
    <tr>
        <th scope="col">id</th>
        <th scope="col">First_name</th>
        <th scope="col">Last_name</th>
        <th scope="col">Email</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php use Libs\Model;
    $pdo = new Model();
    $all_user = $pdo->connection->query("SELECT * FROM `adduser` ; ")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($all_user as $value){
    ?>
    <tr>
        <th scope="row"><?php echo $value['id']?></th>
        <td><?php echo $value['first_name']?></td>
        <td><?php echo $value['last_name']?></td>
        <td><?php echo $value['email']?></td>
        <td>23<td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>