
//PageSkills//
const frontend = document.getElementById("frontend");
const backend = document.getElementById("backend");
const gestiondeprojet = document.getElementById("Gestiondeprojet");
const formation = document.getElementById("formation");
const experiences = document.getElementById("experiences");


const frontendskilllist = document.getElementById("frontendskilllist");
function openFrontendSkillList(){
  frontendskilllist.style.visibility = "visible";
  backend.style.visibility = "hidden";
  gestiondeprojet.style.visibility = "hidden";
  formation.style.visibility = "hidden";
  experiences.style.visibility = "hidden";
}
function closeFrontendSkillList(){
  frontendskilllist.style.visibility = "hidden";
  backend.style.visibility = "visible";
  gestiondeprojet.style.visibility = "visible";
  formation.style.visibility = "visible";
  experiences.style.visibility = "visible";
}
const backendskilllist = document.getElementById("backendskilllist");
function openBackendSkillList(){
  backendskilllist.style.visibility = "visible";
  frontend.style.visibility = "hidden";
  gestiondeprojet.style.visibility = "hidden";
  formation.style.visibility = "hidden";
  experiences.style.visibility = "hidden";
}
function closeBackendSkillList(){
  backendskilllist.style.visibility = "hidden";
  frontend.style.visibility = "visible";
  gestiondeprojet.style.visibility = "visible";
  formation.style.visibility = "visible";
  experiences.style.visibility = "visible";
}
const projectskilllist = document.getElementById("projectskilllist");
function openProjectSkillList(){
  projectskilllist.style.visibility = "visible";
  frontend.style.visibility = "hidden";
  backend.style.visibility = "hidden";
  formation.style.visibility = "hidden";
  experiences.style.visibility = "hidden";

}
function closeProjectSkillList(){
  projectskilllist.style.visibility = "hidden";
  frontend.style.visibility = "visible";
  backend.style.visibility = "visible";
  formation.style.visibility = "visible";
  experiences.style.visibility = "visible";
}
const studyskilllist = document.getElementById("studyskilllist");
function openStudySkillList(){
  studyskilllist.style.visibility = "visible";
  frontend.style.visibility = "hidden";
  backend.style.visibility = "hidden";
  gestiondeprojet.style.visibility = "hidden";
  experiences.style.visibility = "hidden";
}
function closeStudySkillList(){
  studyskilllist.style.visibility = "hidden";
  frontend.style.visibility = "visible";
  backend.style.visibility = "visible";
  gestiondeprojet.style.visibility = "visible";
  experiences.style.visibility = "visible";
}
const experienceskilllist = document.getElementById("experienceskilllist");
function openExperienceSkillList(){
  experienceskilllist.style.visibility = "visible";
  frontend.style.visibility = "hidden";
  backend.style.visibility = "hidden";
  gestiondeprojet.style.visibility = "hidden";
  formation.style.visibility = "hidden";
}
function closeExperienceSkillList(){
  experienceskilllist.style.visibility = "hidden";
  frontend.style.visibility = "visible";
  backend.style.visibility = "visible";
  gestiondeprojet.style.visibility = "visible";
  formation.style.visibility = "visible";
}

// // //Couleur des icones//
// var multipleId = document.getElementById("headertextdiv");
// //var linkColor = document.querySelector("a");
//
// console.log(typeof multipleId);
// var linkColor = document.querySelectorAll("#iconmenu1, #iconmenu2, #iconmenu3, #iconmenu4");
// //
// multipleId.onload = function(){
// //linkColor.style.color = "#FFFFF2";
//   if (multipleId != 0){
//   var i;
//   for (i = 0; i < linkcolor.length; i++)
//   linkColor[i].style.color = "#FFFFF2";
//   }else{
//     linkColor[i].style.color = "#39614E";
//   }
// };
//PAGE PROJECT//
var myProject = document.getElementById("myProject");
var myImage = document.getElementById("desc1");
var myDescription = document.getElementById("myprojectdescription");
myProject.addEventListener("scroll",slideDescription);
function slideDescription(){
  var nbPixInvisible = myProject.scrollTop;
  var nbPixTotal = myProject.scrollHeight;
  var nbPixVisible = myProject.clientHeight;
  var nbTotalPixInvisible = nbPixTotal-nbPixVisible;
  var pourcentage = (nbPixInvisible / nbTotalPixInvisible) * 100;
  console.log(nbPixInvisible);
  console.log(nbPixTotal);
  console.log(nbPixVisible);
  console.log(nbTotalPixInvisible);
  console.log(pourcentage);
  if(nbPixInvisible > 1){
  myDescription.style.visibility = "visible";
}
};

function hideDescription(){
  myDescription.style.visibility = "hidden";
}
//CONTACT//
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
