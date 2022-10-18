<div class="container" >
    <h2 class="text-center">ADD A NEW PRODUCT</h2>
    <form action="/product/addproduct" method="post">
        <div class="row">
        <div class="col-9" >
            <label class="form-label" for="title"></label>
            <input class="form-control" type="text" id="title"  name="title" value="" placeholder="Title" required>
        </div>
        <div class="col-9">
            <label for="description" class="form-label"></label>
            <textarea class="form-control" id="description" placeholder="Description" name ="description" required></textarea>
        </div>
        <div class="col-4">
            <label for="original_price" class="form-label"></label>
            <div class="input-group has-validation">
                <span class="input-group-text">Original price USD</span>
                <input type="number" class="form-control" id="original_price" name ="original_price" required>
        </div>
        <div class="col-6">
                <label for="margin" class="form-label"></label>
                <div class="input-group has-validation">
                    <span class="input-group-text">Margin %</span>
                    <input type="number" class="form-control" id="margin" name ="margin" >
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
            <input class="btn btn-success w-100" type="submit" value="Add new product">
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


