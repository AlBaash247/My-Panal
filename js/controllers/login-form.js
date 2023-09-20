
initUI();

function initUI() {
	let btnFormOverlayText = document.querySelector('#btnFormOverlayText');
	btnFormOverlayText.onclick = function () { toggleFormOverlayPostion(); }

	var btnFormLogin = document.querySelector('#btnFormLogin');
	btnFormLogin.onclick = function () { loginVlidation(); }

	var btnFormRegister = document.querySelector('#btnFormRegister');
	btnFormRegister.onclick = function () { RegisterVlidation(); }
}

function toggleFormOverlayPostion() {
	var formOverlay = document.querySelector('#formOverlay');
	if (formOverlay.classList.contains('my-overlay-left')) {
		formOverlay.classList.remove('my-overlay-left');
		btnFormOverlayText.innerText = "REGISTER";

	} else {
		formOverlay.classList.add('my-overlay-left');
		btnFormOverlayText.innerText = "LOGIN";

	}
}

function loginVlidation() {
	var inputLoginEmail = document.querySelector('#inputLoginEmail');
	var inputLoginEmailValidation = document.querySelector('#inputLoginEmailValidation');

	var inputLoginPassword = document.querySelector('#inputLoginPassword');

	var email = inputLoginEmail.value;
	var password = inputLoginPassword.value;

	if (email == '' || email.length < 3) {
		inputLoginEmail.classList.add('is-invalid');
		inputLoginEmailValidation.innerText = " Please write your Email.";
		return;
	}
	else {

		if (!isEmailValid(email)) {
			inputLoginEmail.classList.add('is-invalid');
			inputLoginEmailValidation.innerText = "Invalid email format.";
			return;
		} else {
			inputLoginEmail.classList.remove('is-invalid');
		}

	}

	if (password == '' || password.length < 6) {
		inputLoginPassword.classList.add('is-invalid');
		return;
	}
	else {
		inputLoginPassword.classList.remove('is-invalid');
	}


}

function RegisterVlidation() {
	var inputRegisterFullName = document.querySelector('#inputRegisterFullName');
	var inputRegisterEmail = document.querySelector('#inputRegisterEmail');
	var inputRegisterEmailValidation = document.querySelector('#inputRegisterEmailValidation');
	var inputRegisterPassword = document.querySelector('#inputRegisterPassword');

	var fullName = inputRegisterFullName.value;
	var email = inputRegisterEmail.value;
	var password = inputRegisterPassword.value;


	if (fullName == '') {
		inputRegisterFullName.classList.add('is-invalid');
		return;
	}
	else {
		inputRegisterFullName.classList.remove('is-invalid');
	}

	if (email == '' || email.length < 3) {
		inputRegisterEmail.classList.add('is-invalid');
		return;
	}
	else {
		if (!isEmailValid(email)) {
			inputRegisterEmail.classList.add('is-invalid');
			inputRegisterEmailValidation.innerText = "Invalid email format.";
			return;
		} else {
			inputRegisterEmail.classList.remove('is-invalid');
		}
	}

	if (password == '' || password.length < 6) {
		inputRegisterPassword.classList.add('is-invalid');
		return;
	}
	else {
		inputRegisterPassword.classList.remove('is-invalid');
	}


}


function isEmailValid(email) {
	return email.match(
		/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
	);
}