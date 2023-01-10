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


var btnDepResFrm = document.getElementById('btnDepResFrm');
btnDepResFrm.onclick = function() {
    // do something....
    var month = getParameterByName('month');
    var year = getParameterByName('year');
    var program = getParameterByName('program');

    
    document.querySelector("#month").value = month;
    document.querySelector("#year").value = year;
    document.querySelector("#program").value = program;
    
    document.getElementById("frmDepRes").submit();
    document.querySelector("#volante").value = "INS";

    console.log(program,month,year);

 
};


