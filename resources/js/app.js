import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
  // отправка формы изменения поста
  const postEditForm = document.querySelector('#edit-post');
  postEditForm.addEventListener("submit", function(e) {
    e.preventDefault();
    const data = new FormData(postEditForm);
    const action = e.target.action + `?name=${data.get("name")}`;

    return axios.get(action);
  });
});
