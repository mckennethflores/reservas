// SEARCH PACKAGE
var btnSearch = document.getElementById('btnSearch');
btnSearch.onclick = function() {
    // do something....
    
    var optmonth = $('#optMonth').find(":selected").val();
    var optyear = $('#optYear').find(":selected").val();

   
    /* console.log(url); */
    window.location.assign("departure-list.php?month="+optmonth+"&year="+optyear); 
 
};