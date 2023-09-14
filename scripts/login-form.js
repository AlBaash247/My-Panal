let formOverlay = document.querySelector('#formOverlay');
let btnFormOverlayText = document.querySelector('#btnFormOverlayText');


btnFormOverlayText.onclick = function () {
	if (formOverlay.classList.contains('my-overlay-left')) {
		formOverlay.classList.remove('my-overlay-left');
		btnFormOverlayText.innerText = "REGISTER";

	} else {
		formOverlay.classList.add('my-overlay-left');
		btnFormOverlayText.innerText = "LOGIN";

	}
}


