document.getElementById("myButton").addEventListener("click",function()
{
    let clientName= prompt("veuillez entrer votre non:");
    let clientEmail= prompt("veuillez entrer votre adrresse e-mail");
    console.log("client enregistre:"+clientName+"-"+clientEmail);
}
);

/*let nom = document.getElementByName("nom");
let prenom = document.getElementByName("prenom");
let datenaissance = document.getElementByName("datenaissance");
let sexe = document.getElementByName("sexe");
let inputFile = document.getElementById("input-file");
let inputFile1 = document.getElementById("input-file1");*/
function validForm (formulaire){
    if(formulaire.nom.value==""|| formulaire.prenom.value==""|| formulaire.datenaissance.value=="" || formulaire.sexe.value=="" 
    || formulaire.inputFile.value=="" || formulaire.inputFile1.value=="" || formulaire.nomhosto.value=="" || formulaire.prix.value=="" 
    || formulaire.inputFile2.value==""){
        alert("remplisser le champs obligatoirement");
        return false;
    }
} 
