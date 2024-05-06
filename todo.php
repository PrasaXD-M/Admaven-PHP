<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>To-Do List App - Easy Tutorials</title> 
<link rel="stylesheet" href="todo.css">
</head> 
<body>
<div class="container">
<div class="todo-app">
<h2>To-Do List <img src="business-to-do-list-flat-icon-modern-style-free-vector.jpg"></h2>
<div class="row">
  <input type="text" id="input-box"  placeholder="Add your text">
  <button onclick="addTask()">Add</button>
</div>
<ul id="list-container">
  <!--
  <li>Task 1</li>
  <li>Task 2</li>
  <li>Task 3</li>-->
</ul>
</div>
</div>
<script src="todo.js"></script>
</body>
<script>
const inputBox = document.getElementById("input-box");
const listContainer = document.getElementById("list-container");


function addTask(){
  if(inputBox.value ===''){
    alert("You must write something!");
  }
else{
let li = document.createElement("1i");
li.innerHTML = inputBox.value;
listContainer.appendChild(li);
let span = document.createElement("span");
span. innerHTML = "\u00d7";
li.appendChild(span);
  }
inputBox.value = "";
}


 listContainer.addEventListener("click",function(e){
if(e.target.tagName === "LI"){
e.target.classList. toggle("checked"); 
saveData();
}
else if(e.target.tagName =="SPAN"){
e. target-parentElement. remove();
saveData();
}
},false);
function saveData(){
localStorage. setItem ("data", listContainer.innerHTML);
}
function showTask(){
  listContainer.innerHTML=localStorage.getItem("data");
}

</script>

 </html>