import store2 from 'https://cdn.jsdelivr.net/npm/store2@2.14.2/+esm'

var user = store2.namespace('user');
// if (user.get('isLoggedIn').is_ok) {
    console.log("logged-in!");
    let addTaskModalOverlay = document.querySelector("#addTaskModalOverlay");
    let addTaskModal = document.querySelector("#addTaskModal");
    let btnAddTaskModalClose = document.querySelector("#btnAddTaskModalClose");
    
    let btnAddTask = document.querySelector('#btnAddTask');
    btnAddTask.onclick = function () { displayAddTaskModal(); }
    
    let inputAddTaskDueDate = document.querySelector('#inputAddTaskDueDate');
    inputAddTaskDueDate.addEventListener("keydown", function (e) {
        e.preventDefault();
      });

    inputAddTaskDueDate.min = getCurrentDate();
    inputAddTaskDueDate.value = getCurrentDate();
// } 


function displayAddTaskModal() {
    addTaskModalOverlay.classList.add('active');
    addTaskModal.classList.add('active');
}

btnAddTaskModalClose.onclick = function () {
    addTaskModalOverlay.classList.remove('active');
    addTaskModal.classList.remove('active');
};

function getCurrentDate(){
    var today = new Date();
    var day=today.getDate()>9?today.getDate():"0"+today.getDate(); // format should be "DD" not "D" e.g 09
    var month=(today.getMonth()+1)>9?(today.getMonth()+1):"0"+(today.getMonth()+1);
    var year=today.getFullYear();

    return year + '-' + month + '-' + day;
}