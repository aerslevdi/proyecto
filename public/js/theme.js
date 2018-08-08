window.addEventListener('load', function() {

  document.getElementById('ea').onclick = function () {
    document.getElementById('theme_css').href = '/css/alt.css';
    document.cookie = 'css = ea';

  }
  document.getElementById('ea2').onclick = function () {
    document.getElementById('theme_css').href = '';
    document.cookie = 'css = ea2';
  }
})
