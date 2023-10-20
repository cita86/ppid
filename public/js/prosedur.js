function FieldCheck_prosedur(that) {
    if (that.value == "Sengketa Informasi Publik") {
  //alert("check");
        document.getElementById("div_formulir_1").style.display = "none";      
        document.getElementById("formulir_1").style.display = "none";
        document.getElementById("div_formulir_2").style.display = "none";
        document.getElementById("formulir_2").style.display = "none";
        document.getElementById("div_formulir_3").style.display = "none";
        document.getElementById("formulir_3").style.display = "none";
    } else {
//  alert("check");
        document.getElementById("div_formulir_1").style.display = "";      
        document.getElementById("formulir_1").style.display = "";
        document.getElementById("div_formulir_2").style.display = "";
        document.getElementById("formulir_2").style.display = "";
        document.getElementById("div_formulir_3").style.display = "";
        document.getElementById("formulir_3").style.display = "";
    }
}
