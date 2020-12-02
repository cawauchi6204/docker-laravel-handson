<section class="top-form-section">
  <form method="POST" action="{{ url('comment/store') }}">
    @csrf
    <div class="form-group w-75 mx-auto">
      <label for="formGroupExampleInput2">コメント内容</label>
      <textarea rows="5" cols="35" class="form-control" id="formGroupExampleInput2" placeholder="内容"
        name="content"></textarea>
      <input type="hidden" name="post_id" value={{ $post->id }} />
      <input class="btn btn-success mt-3" type="submit" value="新規コメント書き込み">
    </div>
  </form>
</section>
