import store2 from 'https://cdn.jsdelivr.net/npm/store2@2.14.2/+esm'

let loginModalOverlay = document.querySelector("#loginModalOverlay");
let loginModal = document.querySelector("#loginModal");
let btnLogin = document.querySelector("#btnLogin");
let btnLoginModalClose = document.querySelector("#btnLoginModalClose");

btnLogin.onclick = function () {
    displayLoginModal();
}

btnLoginModalClose.onclick = function () {
    closeLoginModal();
};


var user = store2.namespace('user');
if (user.get('isLoggedIn').is_ok) {
    initUI();
} else {
    askToLogin();
    displayLoginModal();
}


function initUI() {

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

    btnMentions.onclick = function () { displayLoginModal(); }
    btnAssignedToMe.onclick = function () { displayLoginModal(); }
    btnDisplayAllSpacesDueToday.onclick = function () { displayLoginModal(); }
    btnDisplayCurrentSpaceDueToday.onclick = function () { displayLoginModal(); }
    btnDisplyAllSpacesHighPriority.onclick = function () { displayLoginModal(); }
    btnDisplyCurrentSpacesHighPriority.onclick = function () { displayLoginModal(); }
    btnSelectedSpaceDropdown.onclick = function () { displayLoginModal(); }
    btnAddTask.onclick = function () { displayLoginModal(); }
    btnFilterTodo.onclick = function () { displayLoginModal(); }
    btnFilterInProgress.onclick = function () { displayLoginModal(); }
    btnFilterDone.onclick = function () { displayLoginModal(); }
    btnFilterLowPriorityTask.onclick = function () { displayLoginModal(); }
    btnFilterMeduimPriorityTask.onclick = function () { displayLoginModal(); }
    btnFilterHighPriorityTask.onclick = function () { displayLoginModal(); }

}


function displayLoginModal() {
    loginModalOverlay.classList.add('active');
    loginModal.classList.add('active');
}


export function closeLoginModal() {
    loginModalOverlay.classList.remove('active');
    loginModal.classList.remove('active');
}



