<?php use Libs\Model;
$pdo = new Model();
$params['id'];
$user = $pdo->connection->query("SELECT * FROM `product` WHERE `id`='{$params['id']}'; ")->fetch(PDO::FETCH_ASSOC);
var_dump($user);
?>

<div class="container" >
    <h2 class="text-center">EDIT PRODUCT</h2>
    <form action="/product/addproduct" method="post">

        <div>
            <input type="hidden" name ="id" value="<?= $params['id']; ?>" >
        </div>
        <div class="col-9" >
            <label class="form-label" for="title"></label>
            <input class="form-control" type="text" id="title"  name="title" value="<?= $user['title']; ?>" placeholder="Title" >
        </div>
        <div class="col-9">
            <label for="description" class="form-label"></label>
            <input class="form-control" id="description" placeholder="Description" name ="description"
                      value="<?= $user['description']; ?>" >
        </div>
        <div class="col-4">
            <label for="original_price" class="form-label"></label>
            <div class="original_price has-validation">
                <span class="input-group-text">Original price USD</span>
                <input type="number" class="form-control" id="original_price" name ="original_price"
                       value="<?= $user['original_price']; ?>" required>
            </div>
            <div class="col-7">
                <label for="margin" class="form-label"></label>
                <div class="margin has-validation">
                    <span class="input-group-text">Margin</span>
                    <input type="number" class="form-control" id="margin" name ="margin" value="<?= $user['margin']; ?>">
                </div>
            </div>

            <select name="margin_mode" class="form-select form-select-sm" aria-label=".form-select-sm example"value="<?= $user['margin_mode']; ?>">
                <option selected>Open this select menu</option>
                <option   value="plus_margin" >Plus margin %</option>
                <option   value="fix"> Fix overpriced </option>
            </select>


            <div class="final_price">
                <label for="final_price" class="form-label"></label>
                <div class="input-group has-validation">
                    <span class="input-group-text">Final price</span>
                    <input type="number" step="0.01" class="form-control" id="final_price" name="final_price"value="<?= $user['final_price']; ?>">
                </div>
            </div>

            <script>

                $('.form-select').change(function(){
                    var eto = $(this).val()
                    if (eto === "plus_margin"){
                        $('#original_price').change(function() {
                            var original = Number($(this).val())
                            var margin = Number($('#margin').val())
                            var fprice = original + ((margin/100)*original)
                            $('#final_price').val(fprice)

                        });
                    } else {
                        $('#original_price').change(function() {
                            var original = Number($(this).val())
                            var margin = Number($('#margin').val())
                            var fprice = original + margin
                            $('#final_price').val(fprice)
                        });
                    }
                });

            </script>
            <input  class="btn btn-danger w-100" type="submit" value="Edit product">
    </form>
</div>

