<?php use Libs\Model;
$pdo = new Model();
$params['id'];
$user = $pdo->connection->query("SELECT * FROM `product` WHERE `id`='{$params['id']}'; ")->fetch(PDO::FETCH_ASSOC);
var_dump($user);
?>
<div class="modal fade" id="userModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Change user</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <p><table class="table table-hover table-bordered "><p>
                        <thead class="table-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">First_name  <i class="bi bi-pen"></i> </th>
                            <th scope="col">Last_name</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="container" >
    <h2 class="text-center">EDIT PRODUCT</h2>
    <form action="/product/edit" method="post">

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
                    <input type="number" step="0.01" class="form-control" id="final_price" name="final_price" value="<?= $user['final_price']; ?>" readonly>
                </div>
            </div>
            <div class="user" required >
                <button name="id" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#userModal" >
                    Change user for product
                </button>
                <input type="number" class="form-control" id="id_user" name ="id_user"  value="<?= $user['id_user']; ?>" readonly>
            </div>

            <input  class="btn btn-danger w-100" type="submit" value="Edit product">
    </form>
</div>

<script>

    $('.user button').click(function (){


        $.ajax({
            method: "GET",
            url: "/user/seluser",
        })
            .done(function( responce ) {

                var json = JSON.parse(responce)
                console.log(json)
                for(let j in json){
                    var mass = json[j];
                    var table = " <tr> <td>" + mass['id'] + "</td> <td>" + mass['first_name'] + "</td> <td>" + mass['last_name'] +
                        "</td> <td> <button data-id=' " + mass['id'] + "' type='button' class='btn btn-primary addbtn'>+</button> </td> </tr> "
                    $('tbody').append(table)
                    console.log(table)
//очистка таблицы
//-------------------------------------------------------------------------------
                    $('#close').click(function (){
                        $('tbody').empty()
                    })
//-------------------------------------------------------------------------------------
                }

                $('.addbtn').click(function (){

                    var string = $(this).attr('data-id')
                    var int =  parseInt(string)
                    $('#id_user').val(int)


                })
            });


    });

</script>
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