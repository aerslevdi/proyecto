<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css?family=PT+Sans|Quicksand" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis|Fira+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet">
<link rel="shortcut icon" href="../img/logo.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"  integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link rel="stylesheet" href="/css/<?php if (!isset($_COOKIE['css'])){
  echo 'estilo';} else { if ($_COOKIE['css'] == 'ea2') {
    echo 'estilo';
  } else {
    echo 'alt';
  }
} ?>.css" >
<link rel="stylesheet" id="theme_css" href="" >
  <script src="{{ asset('js/app.js') }}" defer></script>
