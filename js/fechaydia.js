var contador = 1;
var limite = 11;
function addInput(divName){
     if (contador == limite)  {
          alert("Has alcanzado el limite de " + contador + " días");
     }
     else {
          var newdiv = document.createElement('div');
         newdiv.classList.add("container")
          newdiv.innerHTML = ' <div class="form-row"> <!--Bloque de fecha del dia --> <div class="form-group col-12 col-sm-12 col-md-6" id="cajas"> <label>✏ Fecha del día en que se estará realizando el trabajo:*</label> <div class="large_input" style="width: 100%; margin-top:5px;">Inicia: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input class="form-control" type="date" name="dia_inicio[]" data-date-format="DD MMMM YYYY" tabindex="7"> <br> Termina:&nbsp;&nbsp; <input class="form-control" type="date" name="dia_fin[]" data-date-format="DD MMMM YYYY" tabindex="8"> </div> </div> <!--Bloque de inicio de trabajo --> <div class="form-group col-12 col-sm-12 col-md-6" id="cajas"> <label>✏ Horario del trabajo:*</label> <div class="large_input" style="width: 100%; margin-top:5px;"> De:&nbsp;&nbsp; <input class="form-control" type="time" name="hora_inicio[]" tabindex="9"> Hasta: &nbsp;&nbsp; <input class="form-control" type="time" name="hora_fin[]" tabindex="10"> </div> </div></div>';
          document.getElementById(divName).appendChild(newdiv);
          contador++;
          document.getElementById("cantidad_dia").innerHTML = "Llevas " + contador + " días.";
     }
}