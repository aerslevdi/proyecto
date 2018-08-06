window.onload = function () {
  var usu = document.querySelector('[name=cont]');
  fetch('http://localhost:8000/traer')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {

    usu.value = data
  });


  setInterval(function() {
      //call $.ajax here

  fetch('http://localhost:8000/traer')
  .then(function(response) {
    return response.json();
  })
  .then(function(data) {

        usu.value = data;
  });  },30000);
}
