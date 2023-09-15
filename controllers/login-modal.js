import store2 from 'https://cdn.jsdelivr.net/npm/store2@2.14.2/+esm'

let MyLoginModalOverlay = document.querySelector("#MyLoginModalOverlay");
let MyLoginModal = document.querySelector("#MyLoginModal");

let btnLogin = document.querySelector("#btnLogin");
let btnMyLoginModalClose = document.querySelector("#btnMyLoginModalClose");



if (store2.get('isLoggedIn')) {
    initUI();
} else {
    askToLogin();
    displayModal();
}

function askToLogin() {

    let btnMentions = document.querySelector('#btnMentions');
    let btnAssignedToMe = document.querySelector('#btnAssignedToMe');
    let btnDisplayAllSpacesDueToday = document.querySelector('#btnDisplayAllSpacesDueToday');
    let btnDisplayCurrentSpaceDueToday = document.querySelector('#btnDisplayCurrentSpaceDueToday');
    let btnDisplyAllSpacesHighPriority = document.querySelector('#btnDisplyAllSpacesHighPriority');
    let btnDisplyCurrentSpacesHighPriority = document.querySelector('#btnDisplyCurrentSpacesHighPriority');
    let btnSelectedSpaceDropdown = document.querySelector('#btnSelectedSpaceDropdown');
    let btnAddTask = document.querySelector('#btnAddTask');
    let btnFilterTodo = document.querySelector('#btnFilterTodo');
    let btnFilterInProgress = document.querySelector('#btnFilterInProgress');
    let btnFilterDone = document.querySelector('#btnFilterDone');
    let btnFilterLowPriorityTask = document.querySelector('#btnFilterLowPriorityTask');
    let btnFilterMeduimPriorityTask = document.querySelector('#btnFilterMeduimPriorityTask');
    let btnFilterHighPriorityTask = document.querySelector('#btnFilterHighPriorityTask');

    btnMentions.onclick = function () { displayModal(); }
    btnAssignedToMe.onclick = function () { displayModal(); }
    btnDisplayAllSpacesDueToday.onclick = function () { displayModal(); }
    btnDisplayCurrentSpaceDueToday.onclick = function () { displayModal(); }
    btnDisplyAllSpacesHighPriority.onclick = function () { displayModal(); }
    btnDisplyCurrentSpacesHighPriority.onclick = function () { displayModal(); }
    btnSelectedSpaceDropdown.onclick = function () { displayModal(); }
    btnAddTask.onclick = function () { displayModal(); }
    btnFilterTodo.onclick = function () { displayModal(); }
    btnFilterInProgress.onclick = function () { displayModal(); }
    btnFilterDone.onclick = function () { displayModal(); }
    btnFilterLowPriorityTask.onclick = function () { displayModal(); }
    btnFilterMeduimPriorityTask.onclick = function () { displayModal(); }
    btnFilterHighPriorityTask.onclick = function () { displayModal(); }

}


btnLogin.onclick = function () {
    displayModal();
}

btnMyLoginModalClose.onclick = function () {
    MyLoginModalOverlay.classList.remove('active');
    MyLoginModal.classList.remove('active');
};

function displayModal() {
    MyLoginModalOverlay.classList.add('active');
    MyLoginModal.classList.add('active');
}