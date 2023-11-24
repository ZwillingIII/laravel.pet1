import './bootstrap';

function fetch($data) {
  return true;
}

// отправка формы изменения поста
const postEditForm = document.querySelector('#edit-post');
postEditForm.addEventListener("submit", (e) => {
  e.preventDefault();

  const data = {
    "action": e.srcElement.action,
    "method": e.target.method,
  };

  console.log(e);

  // return false;
});
