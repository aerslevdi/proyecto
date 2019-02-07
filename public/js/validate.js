



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


 form.onsubmit = function (ev) {
 		var nuevoArray = new Array();
 	  var regexEmail = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
    var inputEmail = form.querySelector('input[name=email]');
 			for (var i = 0; i < theInputs.length; i++) {
 				if(theInputs[i].value.trim() === '' || !regexEmail.test(inputEmail.value)){
 					nuevoArray.push(i);
 				}
 			}
 			if (nuevoArray.length === 0){
 				ev.preventDefault();
 				window.alert('Campos Incorrectos'+' '+ nuevoArray.join('\n'))
 			}
	};
