
var btnDepResFrm = document.getElementById('btnDepResFrm');
btnDepResFrm.onclick = function() {
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
};

