<section class="top-form-section">
  <form method="POST" action="{{ url('/store') }}">
    @csrf
    <div class="form-group w-75 mx-auto">
      <label for="formGroupExampleInput2">タイトル名</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="タイトル名" name="title">
      <label for="formGroupExampleInput2">名前</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="名前" name="name">
      <label for="formGroupExampleInput2">E-mail</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="E-mail" name="email">
      <label for="formGroupExampleInput2">内容</label>
      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="内容" name="content">
      <input class="btn btn-success mt-3" type="submit" value="新規スレッド書き込み">
    </div>
  </form>
</section>
