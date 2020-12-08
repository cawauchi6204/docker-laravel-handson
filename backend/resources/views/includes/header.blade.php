<header class="header" style="padding-bottom:70px">
  <nav class=" navbar fixed-top navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="/">KZBN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">お気に入り<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ url('user/register') }}">新規登録</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">ログイン</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">マイページ</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        @csrf
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">スレッド検索</button>
      </form>
    </div>
  </nav>
</header>
