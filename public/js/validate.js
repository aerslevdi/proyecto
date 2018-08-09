



	var form = document.querySelector('#form');

	var theInputs = form.elements;

	theInputs = Array.from(theInputs);
	theInputs.pop();

	 for (var input of theInputs) {
	 	input.addEventListener('blur', function () {
	 		if (this.value.trim() === '') {
	 			this.classList.add('is-invalid');
	 			this.parentNode.querySelector('div').classList.add('error');
	 			this.parentNode.querySelector('div').innerHTML = 'Este campo es <b>obligatorio</b>';
	 		} else {
	 			this.classList.remove('is-invalid');
	 			this.parentNode.querySelector('div').classList.remove('error');
	 			this.parentNode.querySelector('div').innerHTML = '';
	 		}
	 	});

 }


	form.onsubmit = function (ev) {
	var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    	var inputEmail = form.querySelector('input[name=email]');
		if (
			theInputs[0].value.trim() === '' ||
			theInputs[1].value.trim() === '' ||
      theInputs[2].value.trim() === '' ||
			theInputs[3].value.trim() === '' ||
      theInputs[4].value.trim() === '' ||
      theInputs[5].value.trim() === '' ||
      theInputs[6].value.trim() === '' ||
      theInputs[7].value.trim() === '' ||
      theInputs[9].value.trim() === '' ||
      theInputs[10].value.trim() === '' ||
      theInputs[12].value.trim() === '' ||
            			!regexEmail.test(inputEmail.value)

		) {
			ev.preventDefault();
			window.alert('Campos Incorrectos');
		}
	};

