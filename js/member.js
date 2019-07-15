function $id(id) {
  return document.getElementById(id);
}
function modelchange1() {
  $id("customized_item").style.display = "flex";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "none";
}
function modelchange2() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "flex";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "none";
}
function modelchange3() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "flex";
  $id("activity_item").style.display = "none";
}
function modelchange4() {
  $id("customized_item").style.display = "none";
  $id("list_item").style.display = "none";
  $id("compete_item").style.display = "none";
  $id("activity_item").style.display = "flex";
}

function init() {
  $id("customized").addEventListener("click", modelchange1, false);
  $id("list").addEventListener("click", modelchange2, false);
  $id("compete").addEventListener("click", modelchange3, false);
  $id("activity").addEventListener("click", modelchange4, false);
}
window.addEventListener("load", init, false);
