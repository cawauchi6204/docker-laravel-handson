<section class="top-form-section">
  <form method="POST" action="{{ url('user/store') }}">
    @csrf
    <div class="form-group w-75 mx-auto">
      <label for="formGroupExampleInput2">お名前</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="お名前" name="name">
      <label for="formGroupExampleInput2">メールアドレス</label>
      <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="メールアドレス" name="email">
      <label for="formGroupExampleInput2">パスワード</label>
      <input type="password" class="form-control" id="formGroupExampleInput2" placeholder="パスワード" name="password">
      <input class="btn btn-success mt-3" type="submit" value="ユーザー登録">
    </div>
  </form>
</section>
