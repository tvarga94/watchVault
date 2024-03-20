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
    @if(session('success'))
        <div id="successMessage" style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif
        <a href="{{route('start')}}"><h2> Back to the start page</h2></a>
    <form action="/options/store" method="POST">
        @csrf
        <h2><label for="article_id">Set the popular posts</label></h2><br />
        <h2><label for="article_id">Main Article</label></h2>
        <select name="popular_posts_main">
            @foreach($posts as $post)
                <option value="{{ $post['id'] }}" {{ $post['id'] == $mainArticleId ? 'selected' : '' }}>{{ $post['title'] }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>

    <form action="/options/store" method="POST">
        @csrf
        <h2><label for="article_id">1st Side Article</label></h2>
        <select name="popular_posts_first">
            @foreach($posts as $post)
                <option value="{{ $post['id'] }}" {{ $post['id'] == $firstArticleId ? 'selected' : '' }}>{{ $post['title'] }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>

    <form action="/options/store" method="POST">
        @csrf
        <h2><label for="article_id">2nd Side Article</label></h2>
        <select name="popular_posts_second">
            @foreach($posts as $post)
                <option value="{{ $post['id'] }}" {{ $post['id'] == $secondArticleId ? 'selected' : '' }}>{{ $post['title'] }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>

    <form action="/options/store" method="POST">
        @csrf
        <h2><label for="article_id">3rd Side Article</label></h2>
        <select name="popular_posts_third">
            @foreach($posts as $post)
                <option value="{{ $post['id'] }}" {{ $post['id'] == $thirdArticleId ? 'selected' : '' }}>{{ $post['title'] }}</option>
            @endforeach
        </select>
        <button type="submit">Save</button>
    </form>
</div>
<script>
        setTimeout(function() {
        var successMessage = document.getElementById('successMessage');
        if (successMessage) {
        successMessage.style.display = 'none';
    }
    }, 2000); // 2000 milliseconds = 2 seconds
</script>
</body>
</html>
