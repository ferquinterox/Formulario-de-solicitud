var contador = 1;
var limite = 11;
function addInput(divName){
     if (contador == limite)  {
          alert("Has alcanzado el limite de " + contador + " días");
     }
     else {
          var newdiv = document.createElement('div');
         newdiv.classList.add("container")
          newdiv.innerHTML = " <div class='form-row'><div class='form-group col-12 col-sm-12 col-md-4' id='cajas'><label>Fecha del día en que se estará realizando el trabajo:*</label><input class= 'form-control' type='date' name='dia[]'></div> <div class='form-group col-12 col-sm-12 col-md-4' id='cajas'><label>Hora de inicio del trabajo:*</label><span class='help-block'>Formato 00:00 - 23:59. </span> <input class='form-control' type='time' name='hora_inicio[]'></div><div class='form-group col-12 col-sm-12 col-md-4' id='cajas'>      <label>Hora de finalización del trabajo:*</label><span class='help-block'>Formato 00:00 - 23:59. </span><input class='form-control' type='time' name='hora_fin[]'></div>  ";
          document.getElementById(divName).appendChild(newdiv);
          contador++;
          document.getElementById("cantidad_dia").innerHTML = "Llevas " + contador + " días.";
     }
}