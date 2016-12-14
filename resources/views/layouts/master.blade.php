<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Shoenotes')
    </title>

    <meta charset='utf-8'>
    <link href="/css/shoenotes.css" type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

    @if(Session::get('flash_message') != null)
        <div class='flash_message'>{{ Session::get('flash_message') }}</div>
    @endif

    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="/">Shoenotes</a></li>
            @if(Auth::check())
                <li><a href='/shoes'>My shoes</a></li>
                <li><a href='/shoes/create'>Add shoe</a></li>
            @else
                <li><a href='/login'>Login</a></li>
                <li><a href='/register'>Register</a></li>
            @endif
        </ul>
    </nav>

    <section class="container">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
