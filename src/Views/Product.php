<div class="container" >
    <h2 class="text-center">ADD A NEW PRODUCT</h2>
    <form action="/product/addproduct" method="post">

        <div class="col-9" >
            <label class="form-label" for="title"></label>
            <input class="form-control" type="text" id="title"  name="title" value="" placeholder="Title" >
        </div>
        <div class="col-9">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" id="description" placeholder="Description" name ="description" ></textarea>
        </div>
        <div class="col-4">
            <label for="original_price" class="form-label"></label>
            <div class="original_price has-validation">
                <span class="input-group-text">Original price USD</span>
                <input type="number" class="form-control" id="original_price" name ="original_price" required>
        </div>
        <div class="col-7">
                <label for="margin" class="form-label"></label>
                <div class="margin has-validation">
                    <span class="input-group-text">Margin</span>
                    <input type="number" class="form-control" id="margin" name ="margin" >
        </div>
        </div>

           <select name="margin_mode" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option selected>Open this select menu</option>
                <option   value="plus_margin" >Plus margin %</option>
                <option   value="fix"> Fix overpriced </option>
            </select>



            <div class="final_price">
                <label for="final_price" class="form-label"></label>
                <div class="input-group has-validation">
                    <span class="input-group-text">Final price</span>
                    <input type="number" step="0.01" class="form-control" id="final_price" name="final_price">
                </div>
            </div>

            <script>

               /* $('.btn').click(function (){
                    $(this).hide(2000).before('<span>Новый блок</span>')
                });*/

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



            <input  class="btn btn-success w-100" type="submit" value="Add new product">
    </form>
</div>



<!--
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
</div>-->