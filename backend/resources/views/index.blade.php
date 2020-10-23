<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/app.css">
</head>

<body>
    <header class="header" style="padding-bottom:70px">
        <nav class=" navbar fixed-top navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand text-white" href="#">KZBN</a>
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
                        <a class="nav-link text-white" href="#">新規登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">ログイン</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">マイページ</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">スレッド検索</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <section class="top-form-section">

            <form>
                <div class="form-group w-75 mx-auto">
                    <label for="formGroupExampleInput2">タイトル名</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="タイトル名">
                    <label for="formGroupExampleInput2">名前</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="名前">
                    <label for="formGroupExampleInput2">E-mail</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail">
                    <label for="formGroupExampleInput2">内容</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="内容">
                    <input class="btn btn-success mt-3" type="button" value="新規スレッド書き込み">
                </div>
            </form>
        </section>
        <section class="top-list-section mt-5">
            <div class="list-group w-75 mx-auto">
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3comments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">213ccomments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">0comments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3comments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">5comments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 comments</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <nav class="mx-auto mt-3">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#!" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#!">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#!">3</a>
                        <li class="page-item">
                            <a class="page-link" href="#!">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
    </main>
    <footer class="footer bg-white">
        <p class="text-dark mx-auto">©︎cawauchi</p>
    </footer>
</body>

</html>
