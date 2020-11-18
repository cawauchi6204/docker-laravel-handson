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
  </div>
</section>
