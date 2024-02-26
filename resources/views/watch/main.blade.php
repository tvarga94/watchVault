<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Book App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>
<body>
<div class="container mt-5">
    <form method="POST" action="watch/addWatch">
        @csrf
        <div class="form-group mb-2">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="brand" placeholder="Enter brand name">
        </div>
        <div class="form-group mb-2">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="model" placeholder="Enter model name">
        </div>
        <div class="form-group mb-2">
            <label for="Image">Image</label>
            <input type="text" class="form-control" name="image" placeholder="Image">
        </div>
        <div class="form-group mb-2">
            <label for="Price">Price</label>
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>
        <div class="form-group mb-2">
            <label for="PriceRange">Price Range Brand Class</label>
            <input type="text" class="form-control" name="price_range_brand_class" placeholder="Enter Price Range Branc Class">
        </div>
        <div class="form-group mb-2">
            <label for="movement">Movement</label>
            <input type="text" class="form-control" name="movement" placeholder="Enter movement">
        </div>
        <div class="form-group mb-2">
            <label for="functionality">Functionality</label>
            <input type="text" class="form-control" name="functionality" placeholder="Enter functionality">
        </div>
        <div class="form-group mb-2">
            <label for="style1">Style 1</label>
            <input type="text" class="form-control" name="style1" placeholder="Style 1">
        </div>
        <div class="form-group mb-2">
            <label for="style2">Style 2</label>
            <input type="text" class="form-control" name="style2" placeholder="Style 2">
        </div>
        <div class="form-group mb-2">
            <label for="style3">Style 3</label>
            <input type="text" class="form-control" name="style3" placeholder="Style 3">
        </div>
        <div class="form-group mb-2">
            <label for="style4">Style 4</label>
            <input type="text" class="form-control" name="style4" placeholder="Style 4">
        </div>
        <div class="form-group mb-2">
            <label for="style5">Style 5</label>
            <input type="text" class="form-control" name="style5" placeholder="Style 5">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <table class="table mt-5">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @if (count($watches) > 0)
            @foreach ($watches as $watch)
                <tr>
                    <th>{{ $watch['id'] }}</th>
                    <th>{{ $watch['brand'] }}</th>
                    <th>{{ $watch['model'] }}</th>
                    <th>{{ $watch['price'] }}</th>
                    <th><a href="/watch/edit/{{ $watch['id'] }}" class="btn btn-primary">Edit</a>
                        <a href="/watch/delete/{{ $watch['id'] }}" class="btn btn-danger">Delete</a>
                    </th>
                </tr>
            @endforeach
        @else
            <tr>
                <th>No Data</th>
            </tr>
        @endif
        </tbody>
    </table>
</div>
</body>
</html>