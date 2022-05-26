let members = +prompt("Įveskite grupės narių skaičių: ");

if (members === 0){
    alert("Grupę turi sudaryti bent 1 narys!");
}else if(members === 1){
    alert("Solo grupė");
}else if(members === 2){
    alert("Duetas");
}else if(members === 3){
    alert("Trio");
}else if(members === 4){
    alert("Kvartetas");
}else if(members > 4){
    alert("Didelė grupė");
}else {
    alert("ERROR");
}