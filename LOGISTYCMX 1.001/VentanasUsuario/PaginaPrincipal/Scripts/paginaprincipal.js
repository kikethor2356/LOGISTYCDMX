function MostrarCuadricula(){
  //  alert("Cuadricula");

    var Cuadricula = document.getElementById('product1');
    var Lista = document.getElementById('tabla1');
    Cuadricula.style.display = 'block';
    Lista.style.display = 'none';
}

function MostrarLista(){
   // alert("Lista");
    var Cuadricula = document.getElementById('product1');
    var Lista = document.getElementById('tabla1');

    Cuadricula.style.display = 'none';
    Lista.style.display = 'block';
    
}