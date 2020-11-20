const multipleId = document.querySelectorAll("contact,myskillspage");
const header = document.getElementById("header");
const headertext = document.getElementById("headertextdiv");
//const wrapper = document.getElementById("wrapper");
//const background = document.getElementById("bg");
var linkcolor = document.querySelectorAll("#iconmenu1, #iconmenu2, #iconmenu3, #iconmenu4");
console.log(linkcolor);

multipleId.addEventListener('load', disableHeaderText());
function disableHeaderText() {
  console.log(multipleId);
  header.style.display="block";
  headertext.style.display="none";
  //document.getElementById("colorlink").innerHTML=linkcolor.length;

  if (multipleId != 0){
  var i;
  for (i = 0; i < linkcolor.length; i++)
    linkcolor[i].style.color = "#39614E";
  }else{
    linkcolor[i].style.color = "#fffff2";
  }
  //wrapper.style.display="block";
  //background.style.display="block";
}

//CONTACT
// Il y a plusieurs façon de sélectionner un nœud DOM ; ici on récupère
// le formulaire et le champ d'e-mail ainsi que l'élément span
// dans lequel on placera le message d'erreur

var form  = document.getElementsByTagName('form')[0];
var email = document.getElementById('mail');
var name = document.getElementById('yourname');
var errormail = document.querySelector('.erroremail');
var errorname = document.querySelector('.errorname');

email.addEventListener("input", function(event) {
  // Chaque fois que l'utilisateur saisit quelque chose
  // on vérifie la validité du champ e-mail.
  if (email.validity.valid) {
    // S'il y a un message d'erreur affiché et que le champ
    // est valide, on retire l'erreur
    errormail.innerHTML = ""; // On réinitialise le contenu
    errormail.className = "errormail"; // On réinitialise l'état visuel du message
  }
  }, false);

form.addEventListener("submit", function (event) {
  // Chaque fois que l'utilisateur tente d'envoyer les données
  // on vérifie que le champ email est valide.

  if (!email.validity.valid) {

    // S'il est invalide, on affiche un message d'erreur personnalisé
    errormail.innerHTML = "Ben alors, on sait pas écrire une adresse mail?";
    errormail.className = "errormail active";
    // Et on empêche l'envoi des données du formulaire
    event.preventDefault();
  }
}, false);
