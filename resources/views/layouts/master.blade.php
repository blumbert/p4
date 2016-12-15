<!DOCTYPE html>
<html>
<head>
    <title>
        @yield('title','Shoenotes')
    </title>

    <meta charset='utf-8'>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/shoenotes.css" type='text/css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>

    @yield('head')

</head>
<body>

    @if(Session::get('flash_message') != null)
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ Session::get('flash_message') }}
        </div>
    @endif

    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li><a class="navbar-brand" href="/">Shoenotes</a></li>
            @if(Auth::check())
                <li><a href='/shoes'>My shoes</a></li>
                <li><a href='/shoes/create'>Add shoe</a></li>
            @endif
        </ul>
        <ul class="nav navbar-nav" id="logout_link">
            @if(Auth::check())
                <li><a><b>{{ Auth::user()->name }}</b></a></li>
                <li><a href='/logout'>Logout</a></li>
            @else
                <li><a href='/login'>Login</a></li>
                <li><a href='/register'>Sign Up</a></li>
            @endif
        </ul>
    </nav>

    <section class="container">
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
    </footer>

    <script src="/js/shoenotes.js"></script>
    <script src="/js/app.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
