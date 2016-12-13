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

    <header>
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif
    </header>

    <nav>
        <ul class="nav nav-pills">
            <li><a href='/shoes'>View all shoes</a></li>
            <li><a href='/shoes/create'>Add a new shoe</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

</body>
</html>
