<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<body>
<h1>HelloWord</h1>
<div>
    <form action="/product/totalPrise" method="post">

        <div class="container">

            <p>Заполните форму для подстчёта стоимости</p>
            <hr>
            <label for="price"><b>Price</b></label>
            <input type="number" placeholder="Enter price" name="price" required>

            <label for="quantity"><b>Quantity</b></label>
            <input type="number" placeholder="Enter quantity" name="quantity" required>

            <button type="submit" class="registerbtn">Подсчитать</button>
        </div>

    </form>


</div>


</body>
</html>



