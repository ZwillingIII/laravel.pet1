// import './bootstrap';

// ! TODO: более 1000 запросов за раз
function fetchFunc(action, method) {
  return fetch(action, {
    method: method,
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

    const formData = new FormData(postEditForm);
    const data = {
      "name": formData.get('name'),
      "_token": formData.get('_token')
    }

    // console.log(e.target.action, e.target.method, data);

    const action = e.target.action + `?name=${data.name}`;
  
    fetchFunc(action, e.target.method);
  });
});
