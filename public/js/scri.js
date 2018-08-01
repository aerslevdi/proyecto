window.onload=function(){
    var autoJSON= '{"marca":"Renaut","año":2019}';
    console.log(autoJSON);
    console.log(typeof autoJSON);

    var autoOBJ= JSON.parse(autoJSON);
    console.log(autoOBJ.marca);


    var bartSIm={
      nombre : 'bart',
      apellido : 'sim',
      edad:10

    }
    console.log(bartSIm);
  var  bartJ= JSON.stringify(bartSIm);
      console.log(bartJ);

  for (var item in bartSIm) {
    console.log(`${item} : ${bartSIm[item]}` );
  }

  }
