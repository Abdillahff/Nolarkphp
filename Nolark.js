
/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

window.addEventListener("load", function () {
   window.document.querySelector("#btn_envoyer").addEventListener("click", function () {
       if (window.document.querySelector("#i_nom").value === "" && window.document.querySelector("#i_prenom").value === "") {
           alert("Le nom et le prénom doivent être remplis"); // On affiche un message
       } else if (window.document.querySelector("#i_email").value === "") {
           alert("L'email doit être rempli"); // On affiche un message
       } else {
           var question = "Souhaitez-vous réellement utiliser l'adresse mail suivante ? : " + window.document.querySelector("#i_email").value;
           if (confirm(question)) {
               window.document.querySelector("#form_contact").button(); // On peut envoyer
           }
       }
   }, false);
}, false); 
 
 
 
 
  