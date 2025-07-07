"use strict";

var users = [];
var posts = [];

function showUsers() {
  var main = document.getElementById('main-content');
  main.innerHTML = "\n    <h2>\u041F\u043E\u043B\u044C\u0437\u043E\u0432\u0430\u0442\u0435\u043B\u0438</h2>\n    <button onclick=\"addUser()\">\u0414\u043E\u0431\u0430\u0432\u0438\u0442\u044C \u043F\u043E\u043B\u044C\u0437\u043E\u0432\u0430\u0442\u0435\u043B\u044F</button>\n    <ul>\n      ".concat(users.map(function (u, i) {
    return "<li>".concat(u.name, " <button onclick=\"editUser(").concat(i, ")\">\u0420\u0435\u0434\u0430\u043A\u0442\u0438\u0440\u043E\u0432\u0430\u0442\u044C</button></li>");
  }).join(''), "\n    </ul>\n  ");
}

function addUser() {
  var name = prompt("Введите имя пользователя:");

  if (name) {
    users.push({
      name: name
    });
    showUsers();
  }
}

function editUser(index) {
  var name = prompt("Редактировать имя:", users[index].name);

  if (name) {
    users[index].name = name;
    showUsers();
  }
}

function showPosts() {
  var main = document.getElementById('main-content');
  main.innerHTML = "\n    <h2>\u0417\u0430\u043F\u0438\u0441\u0438</h2>\n    <button onclick=\"addPost()\">\u0414\u043E\u0431\u0430\u0432\u0438\u0442\u044C \u0437\u0430\u043F\u0438\u0441\u044C</button>\n    <ul>\n      ".concat(posts.map(function (p, i) {
    return "<li>".concat(p.title, " <button onclick=\"editPost(").concat(i, ")\">\u0420\u0435\u0434\u0430\u043A\u0442\u0438\u0440\u043E\u0432\u0430\u0442\u044C</button></li>");
  }).join(''), "\n    </ul>\n  ");
}

function addPost() {
  var title = prompt("Введите заголовок записи:");

  if (title) {
    posts.push({
      title: title
    });
    showPosts();
  }
}

function editPost(index) {
  var title = prompt("Редактировать заголовок:", posts[index].title);

  if (title) {
    posts[index].title = title;
    showPosts();
  }
}