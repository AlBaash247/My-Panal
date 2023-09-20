import store2 from 'https://cdn.jsdelivr.net/npm/store2@2.14.2/+esm'

var user = store2.namespace('user');
// if (user.get('isLoggedIn').is_ok) {
    console.log("logged-in!");
    let editTaskModalOverlay = document.querySelector("#editTaskModalOverlay");
    let editTaskModal = document.querySelector("#editTaskModal");
    let btnEditTaskModalClose = document.querySelector("#btnEditTaskModalClose");
    
    let btnTaskRow_1 = document.querySelector('#taskRow_1');
    btnTaskRow_1.onclick = function () { displayEditTaskModal(); }
    
    let inputEditTaskDueDate = document.querySelector('#inputEditTaskDueDate');
    inputEditTaskDueDate.addEventListener("keydown", function (e) {
        e.preventDefault();
      });

    inputEditTaskDueDate.min = getCurrentDate();
    inputEditTaskDueDate.value = getCurrentDate();
// } 


function displayEditTaskModal() { 
    editTaskModalOverlay.classList.add('active');
    editTaskModal.classList.add('active');
}

btnEditTaskModalClose.onclick = function () {
    editTaskModalOverlay.classList.remove('active');
    editTaskModal.classList.remove('active');
};

function getCurrentDate(){
    var today = new Date();
    var day=today.getDate()>9?today.getDate():"0"+today.getDate(); // format should be "DD" not "D" e.g 09
    var month=(today.getMonth()+1)>9?(today.getMonth()+1):"0"+(today.getMonth()+1);
    var year=today.getFullYear();

    return year + '-' + month + '-' + day;
}