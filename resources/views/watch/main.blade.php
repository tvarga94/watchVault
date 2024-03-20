<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Watch Backend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>
<body>
<div class="container mt-5" style="text-align: center">
    <a href="{{route('start')}}"><h2> Back to the start page</h2></a>
    <h2> Add new watch</h2>
    <form method="POST" action="watch/addWatch">
        @csrf
        <table style="margin: auto; width: 100%; border-collapse: collapse;">
            <tr><td>
        <div class="form-group mb-2">
            <label>Brand</label>
            <input type="text" class="form-control" name="brand">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Model</label>
            <input type="text" class="form-control" name="model">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Image</label><br />
            <input type="hidden" name="image" value="0">
            <input type="checkbox" name="image" value="1">
        </div>
             </td><td>
        <div class="form-group mb-2">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>
             </td></tr>
             <tr><td>
        <div class="form-group mb-2">
            <label>Price Range Brand Class</label>
            <input type="text" class="form-control" name="price_range_brand_class">
        </div>
              </td><td>
        <div class="form-group mb-2">
            <label>Movement</label>
            <input type="text" class="form-control" name="movement">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Functionality</label>
            <input type="text" class="form-control" name="functionality">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Style 1</label>
            <input type="text" class="form-control" name="style1">
        </div>
            </td></tr>
            <tr><td>
        <div class="form-group mb-2">
            <label>Style 2</label>
            <input type="text" class="form-control" name="style2">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Style 3</label>
            <input type="text" class="form-control" name="style3">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Style 4</label>
            <input type="text" class="form-control" name="style4">
        </div>
            </td><td>
        <div class="form-group mb-2">
            <label>Style 5</label>
            <input type="text" class="form-control" name="style5">
        </div>
            </td></tr></table>
        <button type="submit" class="btn btn-primary">Add</button>
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
