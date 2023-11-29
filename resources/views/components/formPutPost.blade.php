<form id="edit-post" data-code="{{ $code }}" action="{{ route("posts.edit", $code, false) }}" method="GET">
  @csrf
  <input type="text" name="name" placeholder="test" value="">
  <button type="submit">Send</button>
</form>