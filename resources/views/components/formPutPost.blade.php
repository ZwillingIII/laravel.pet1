<form id="edit-post" data-code="{{ $code }}" action="{{ route("posts.edit", $code) }}" method="GET">
  <input type="text" name="name" placeholder="test" value="">
  <button type="submit">Send</button>
</form>