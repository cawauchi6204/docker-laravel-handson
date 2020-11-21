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
      <section class="top-list-section mt-5">
        <div class="list-group w-75 mx-auto bg-white m-3">
          <div class="d-flex w-100 justify-content-between">
            <h1 class="m-3">{{ $posts_data->title }}</h5>
          </div>
          <p class="m-3">{{ $posts_data->content }}</p>
          <small class="m-3">{{ $posts_data->created_at }}</small>
          </div>
          @foreach ( $comment_data as $item )
            <div class="border-bottom w-75 mx-auto my-3">
              <p class="m-3">{{ $item->content }}</p>
              <small class="m-3">{{ $item->created_at }}</small>
            </div>
          @endforeach
          @include('includes.comment_form')
      </section>
    </main>

    <footer>
        @include('includes.footer')
    </footer>
</body>

</html>
