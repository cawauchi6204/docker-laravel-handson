<html>

<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>

<body>
    <header>
        @include('includes.header')
    </header>

    <main>
        @include('includes.thread_form')
        @include('includes.thread_list')
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
