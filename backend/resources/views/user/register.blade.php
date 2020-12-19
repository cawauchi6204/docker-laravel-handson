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
    <h1>アカウント作成</h1>
    @include('user.register_form')
  </main>

  <footer>
    @include('includes.footer')
  </footer>
</body>

</html>
