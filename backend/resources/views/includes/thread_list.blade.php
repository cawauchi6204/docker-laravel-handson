<section class="top-list-section mt-5">
  <div class="list-group w-75 mx-auto">
    @foreach ($data as $item)
    <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $item->title }}</h5>
        <small>コメント数:3件</small>
      </div>
      <p class="mb-1">{{ $item->content }}</p>
      <small>{{ $item->created_at }}</small>
    </a>
    @endforeach
    {{ $data->links() }}
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
