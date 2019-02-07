



	var form = document.querySelector('#form');
	console.log(form);

	var theInputs = form.elements;

	theInputs = Array.from(theInputs);
	theInputs.pop();

	 for (var input of theInputs) {
	 	input.addEventListener('blur', function () {

			let divError = this.parentNode.querySelector('div');
	 		if (this.value.trim() === '') {
	 			this.classList.add('is-invalid');


	 			divError.classList.add('text-danger');
	 			divError.innerHTML = 'Este campo es <b>obligatorio</b>';
	 		} else {
	 			this.classList.remove('is-invalid');
	 			divError.classList.remove('text-danger');
	 			divError.innerHTML = '';
	 		}
	 	});

 }


 
