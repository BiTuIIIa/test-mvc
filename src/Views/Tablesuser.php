<div class="container-xxl">
<p><table class="table table-hover table-bordered "><p>
    <thead class="table-dark">
    <tr>
        <th scope="col">id</th>
        <th scope="col">First_name  <i class="bi bi-pen"></i> </th>
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

        <td>

            <a href="/user/viewed?id=<?php echo $value['id']?>"  <button name = "edit" type="button" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pen" viewBox="0 0 16 16">
                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                </svg> </button>

            <a href="/user/deluser?id=<?php echo $value['id'] ?>" ><button name="delete" type="button" class="btn btn-danger"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash" viewBox="0 0 16 16">

                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                </svg></button>
        </td>

    </tr>
    <?php } ?>
    </tbody>
</table>


