function FieldCheck(that) {
    if (that.value == "profil") {
//  alert("check");
        document.getElementById("div_uraian_kiri").style.display = "block";
        document.getElementById("label_uraian_kanan").innerHTML= "Uraian Bagian Kanan";
        document.getElementById("div_gambar_kiri").style.display = "block";
        document.getElementById("label_gambar_kanan").innerHTML= "Gambar Bagian Kanan";
    //} else if(that.value == "maklumat") {
       // document.getElementById("div_uraian_kiri").style.display = "none";
       // document.getElementById("label_uraian_kanan").innerHTML= "Uraian";
       // document.getElementById("div_gambar_kiri").style.display = "none";
       // document.getElementById("label_gambar_kanan").innerHTML= "Gambar";
    } else {
//  alert("check");
        document.getElementById("div_uraian_kiri").style.display = "none";
        document.getElementById("label_uraian_kanan").innerHTML= "Uraian";
        document.getElementById("div_gambar_kiri").style.display = "none";
        document.getElementById("label_gambar_kanan").innerHTML= "Gambar";
    } 
}
