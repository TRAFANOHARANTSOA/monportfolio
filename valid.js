console.log('ici tsiry');
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
