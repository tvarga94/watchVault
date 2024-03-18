<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png')  }}" />

    <title>Grand Blog | Responsive Blog Template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .box {
            width: 30%;
            padding: 20px;
            margin: 10px;
            border: 1px solid #000;
            box-sizing: border-box;
            text-align: center;
        }

        /* Mobile view */
        @media (max-width: 768px) {
            .box {
                width: 100%;
            }
        }
    </style>

</head>

<body>
<h1 style="text-align: center;padding-top: 2%">Dashboard</h1>
<div class="container">
    <div class="box"><img src="{{ asset('assets/images/icon/watch.png') }}"><a href="/watch">Modify The Watch Database</a></div>
    <div class="box"><img src="{{ asset('assets/images/icon/settings.png') }}"><a href="/options"> Set Popular Articles</a></div>
    <div class="box"><img src="{{ asset('assets/images/icon/blog.png') }}"><a href="/canvas/stat"> Go To The Blog</a></div>
</div>
</body>
</html>

