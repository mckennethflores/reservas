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


function btnProgramas(id,fec){
    var month = getParameterByName('month');
    var year = getParameterByName('year');
    var id_= id;
    var fec_= fec;
    window.location.assign("departure-reserve-form.php?month="+month+"&year="+year+"&program="+id_+"&fec="+fec_); 
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

