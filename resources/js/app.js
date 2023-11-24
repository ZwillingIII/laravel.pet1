// import './bootstrap';

// ! TODO: более 1000 запросов за раз
function fetch(action, method, form) {
  return fetch(action, {
    method: method,
    // body: new FormData(form),
  })
  .then((data) => {
    console.log(data);
  })
  .catch((error) => {
    console.log(error);
  });
}

document.addEventListener('DOMContentLoaded', function() {
  // отправка формы изменения поста
  const postEditForm = document.querySelector('#edit-post');
  postEditForm.addEventListener("submit", function(e) {
    e.preventDefault();
  
    fetch(e.target.action, e.target.method, postEditForm);
  });
});
