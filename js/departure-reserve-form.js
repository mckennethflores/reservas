window.addEventListener('load', function() {
    document.querySelector("#btnDepResFrm").disabled = true;
	fntValidEmail(); 
 
}, false);


function fntValidEmail(){
	let validEmail = document.querySelectorAll(".btnCalc");
    validEmail.forEach(function(validEmail) {
        validEmail.addEventListener('click', function(){
			let inputValue = this.value;
			if(inputValue){
				/* this.classList.add('is-invalid'); */
                document.querySelector("#btnDepResFrm").disabled = true;
			}else{
				/* this.classList.remove('is-invalid'); */
                document.querySelector("#btnDepResFrm").disabled = false;
			}				
		});
	});
}
function fntEmailValidate(email){
    var stringEmail = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})$/);
    if (stringEmail.test(email) == false){
        return false;
    }else{
        return true;
    }
}



var btnDepResFrm = document.getElementById('btnDepResFrm');
btnDepResFrm.onclick = function() {

    var total_input = gv("total_input");

    if(total_input == 0){
       // alert("Porfavor seleccione un paquete");
      //  console.log("Porfavor seleccione un paquete");
        document.querySelector("#btnDepResFrm").disabled = true;
        return;
    }else{
        // do something....
            var month = getParameterByName('month');
            var year = getParameterByName('year');
            var program = getParameterByName('program');
            var fec = document.querySelector('#fec').value;

            var total_input = document.querySelector("#total_input").value;

            /* console.log(total_input, month,year,program,fec);
            return; */
            
            document.querySelector("#month").value = month;
            document.querySelector("#year").value = year;
            document.querySelector("#program").value = program;
            document.querySelector("#fec").value = fec;
            
        /*     document.getElementById("frmDepRes").submit();
            document.querySelector("#volante").value = "INS";

            console.log(program,month,year); */

            window.location.assign("confirmacion.php?month="+month+"&year="+year+"&program="+program+"&fec="+fec+"&total_input="+total_input); 

    }
    
};

