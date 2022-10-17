<?php use Libs\Model;
$pdo = new Model();
$params['id'];
$user = $pdo->connection->query("SELECT * FROM `product` WHERE `id`='{$params['id']}'; ")->fetch(PDO::FETCH_ASSOC);

?>

<div class="container" >
    <h2 class="text-center">EDIT PRODUCT</h2>
    <form action="/product/edit" method="post">
        <div class="row">
            <div>
                <input type="hidden" name ="id" value="<?php echo $params['id']; ?>" >
            </div>
            <div class="col-9" >
                <label class="form-label" for="title"></label>
                <input class="form-control" type="text" id="title"  name="title" value="<?= $user['title']; ?>" placeholder="Title" required>
            </div>
            <div class="col-9">
                <label for="description" class="form-label"></label>
                <textarea class="form-control" id="description" placeholder="Description" name ="description" value="<?= $user['description']; ?>" required></textarea>
            </div>
            <div class="col-4">
                <label for="original_price" class="form-`label"></label>
                <div class="input-group has-validation">
                    <span class="input-group-text">Original price USD</span>
                    <input type="number" class="form-control" id="original_price" name ="original_price" value="<?= $user['original_price']; ?>" required>
                </div>
                <div class="col-6">
                    <label for="margin" class="form-label"></label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">Margin %</span>
                        <input type="number" class="form-control" id="margin" name ="margin" value="<?= $user['margin']; ?>" >
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name ="plus_margin" value="plus_margin"  id="plus_margin">
                    <label class="form-check-label" for="plus_margin">
                        Plus margin
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="fixa" id="fixa" name ="fixa" >
                    <label class="form-check-label" for="fixa">
                        Fix overpriced +40%
                    </label>
                </div>



            </div>
            <input class="btn btn-danger w-100" type="submit" value="Edit product">
    </form>
</div>
<!--
        <div class="col-33">
                <label for="final_price" class="form-label"></label>
                <div class="input-group has-validation">
                    <span class="input-group-text">Final price</span>
                    <input type="number" class="form-control" id="final_price" required>
        </div>
        </div>
-->


