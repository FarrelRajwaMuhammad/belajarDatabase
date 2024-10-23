<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <select class="form-select">
            <option value="Makanan">Makanan</option>
            <option value="Ramen">Ramen</option>
            <option value="Minuman">Minuman</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Nama Product</label>
        <input type="text" class="form-control" id="productName">
    </div>
    <div class="mb-3">
        <label name="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="productPrice">
    </div>
    <div class="mb-3">
        <label name="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" id="productStock">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Input Image</label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</html>
