var hamburguer = document.getElementById('hamburguer');

hamburguer.style.cursor = 'pointer';
hamburguer.onclick = function() {
    // do something....
    
    $("#hamburguer").addClass("hidden");
    $("#close").removeClass("hidden");
    $("#menu-mb").removeClass("hidden");
 
};


var close = document.getElementById('close');

close.style.cursor = 'pointer';
close.onclick = function() {
    // do something....
    
    $("#close").addClass("hidden");
    $("#hamburguer").removeClass("hidden");
    $("#menu-mb").addClass("hidden");
 
};


function carrouselRev(val){
    if(val == 1){
        $("#text1").removeClass("hidden");
        $("#text2").addClass("hidden");
        $("#img2").addClass("hidden");
        $("#img1").removeClass("hidden");
        $("#c_btn2").removeClass("fa-circle");
        $("#c_btn2").addClass("fa-circle-o");
        $("#c_btn1").addClass("fa-circle");
    }
    if(val == 2){
        $("#text2").removeClass("hidden");
        $("#text1").addClass("hidden");
        $("#img2").removeClass("hidden");
        $("#img1").addClass("hidden");
        $("#c_btn1").removeClass("fa-circle");
        $("#c_btn1").addClass("fa-circle-o");
        $("#c_btn2").addClass("fa-circle");
    }
/*    var t1 = document.querySelector("#text1"); */

}



function btnProgramas(programaid){



  let fechasalidaid1 = $('input[name="fecha_salida"]:checked').val();
  if(fechasalidaid1 != undefined){
        console.log("no seleecion nada");
        
      
        //console.log("demo"); return;
        var Month = getParameterByName('month');
        var Year = getParameterByName('year');
      //  var programaid= programaid;
    
      // var fec_= fec;

      // capturar valor del value y eso pasarlo a un input
      let fechasalidaid = $('input[name="fecha_salida"]:checked').val();
      // console.log(Fechadesalidaid);

    // var fechasalidaid  = document.querySelector("#input_program_fec_"+programaid).value;
        var nombre_input  = document.querySelector("#nombre_input"+programaid).value;
    // console.log(fechasalidaid, "#input_program_fec_"+programaid);
        window.location.assign("departure-reserve-form.php?month="+Month+"&year="+Year+"&program="+programaid+"&fechasalidaid="+fechasalidaid+"&nombre_input="+nombre_input); 
  }else{
    alert("Porfavor Seleccione una opción");
    console.log("no seleecion nada");
  }
}

/* var btnSearch2 = document.getElementById('btnSearch2');
btnSearch2.onclick = function() {
    // do something....
    var month = getParameterByName('month');
    var year = getParameterByName('year');

    
    var program = $('input[name="program"]:checked').val();


    window.location.assign("departure-reserve-form.php?month="+month+"&year="+year+"&program="+program); 
    
     document.getElementById("frmDepList").submit(); 

     console.log(program,month,year); 

 
};
 */
function focusBtn(fechasalidaid,programaid, nombre){
    //vconsole.log(fechasalidaid);

    document.querySelector("#input_program_fec_"+programaid).value = fechasalidaid;

    document.querySelector("#nombre_input"+programaid).value = nombre;
}


function focusBtn2(element,programaid){

    var identificadodelPrograma = programaid;

    getProductos(programaid);
    getProductos(programaid)
      .then(function (data) {
        return data.json();
      })
      .then((data) => {
        listadoProgramas(data);
      });

      function getProductos(programaid) {
        return fetch(
            base_url+"/departure-list_fun.php?op=listDateProgram" +
          "&programaid=" + programaid
        );
      }
      

    // hacer un select o while de todos los for del id de servicio

    function listadoProgramas(programaid) {
        var count = 0;
        programaid.forEach((item, index) => {

        //Borrar los radio seleccionados

        
       /*  $("label[for='for_"+item.fechasalidaid+"']").removeClass("btnFocus") */

        

          var post = `<div class="col-md-3 divBox"  > <span>
          <label   for="for_${item.fechasalidaid}" class="divRad radio-label btnLogin label_${item.fechasalidaid} ${item.id ? "btnFocus": ""}" >
               <input  type="radio" onchange="focusBtn(this,${item.fechasalidaid})" required name="fechadesalida_name" id="fecsal_${item.fechasalidaid}" value="${item.fechasalidaid}" class="radio" >${item.nombre}
          </label>
          </span></div>`;
          setTimeout(function () {
        //    $(this).closest('divBox').remove();
       // $("#container-fechas"+identificadodelPrograma).remove(post);
            $("#container-fechas"+identificadodelPrograma).append(post);

          }, 100);
      
          count++;


        });

        console.log("Hay " + count + " programas");
      }

    // dentro de array obtengo  el nombre del for, luego remuevo

}