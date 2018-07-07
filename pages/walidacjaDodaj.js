function walidacjaDodaj() {
    //var pola = ["data", "zasolenie", "ph", "kh", "ca", "mg", "no3", "po4"];
    var pola = ["data", "zasolenie", "kh", "ca"];
    for(i=0; i<pola.length; i++){
        if(document.forms['dodajForm'][pola[i]].value == "") {
            alert("Trzeba wypełnić pole " + pola[i]);
            return false;
        }
    }
}