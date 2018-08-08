<html>
    <head>
        <title>アプリ名 - @yield('title')</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><!-- Bootstrap本体 -->
    </head>
    <body>
        @section('sidebar')
            ここがメインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Scripts（Jquery） -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script><!-- Scripts（bootstrapのjavascript） -->
    </body>
</html>