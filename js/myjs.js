 $('#formulario').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) { 
      alert("El formulario no puede contener errores");
  } else {
    // se envia
  }
})



