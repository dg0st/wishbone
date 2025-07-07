let users = [];
let posts = [];

function showUsers() {
  const main = document.getElementById('main-content');
  main.innerHTML = `
    <h2>Пользователи</h2>
    <button onclick="addUser()">Добавить пользователя</button>
    <ul>
      ${users.map((u, i) => `<li>${u.name} <button onclick="editUser(${i})">Редактировать</button></li>`).join('')}
    </ul>
  `;
}

function addUser() {
  const name = prompt("Введите имя пользователя:");
  if (name) {
    users.push({ name });
    showUsers();
  }
}

function editUser(index) {
  const name = prompt("Редактировать имя:", users[index].name);
  if (name) {
    users[index].name = name;
    showUsers();
  }
}

function showPosts() {
  const main = document.getElementById('main-content');
  main.innerHTML = `
    <h2>Записи</h2>
    <button onclick="addPost()">Добавить запись</button>
    <ul>
      ${posts.map((p, i) => `<li>${p.title} <button onclick="editPost(${i})">Редактировать</button></li>`).join('')}
    </ul>
  `;
}

function addPost() {
  const title = prompt("Введите заголовок записи:");
  if (title) {
    posts.push({ title });
    showPosts();
  }
}

function editPost(index) {
  const title = prompt("Редактировать заголовок:", posts[index].title);
  if (title) {
    posts[index].title = title;
    showPosts();
  }
}
