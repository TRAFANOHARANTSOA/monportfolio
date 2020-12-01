<?php include 'header.php'; ?>
<?php session_start();?>
  <div id="myProject"   class="myprojectslider" >
    <img class="imagedefilante" id="desc1" onclick="showDescription()"  src="images/bientournerscreenimg.png" alt="">
    <div id="myprojectdescription" onclick="hideDescription()">
      <h1>Live interactif sur le site Bien-tourner.fr</h1>
      <p>Contexte du projet : stage en entreprise.</p>
      <p>Problématique : mon lieu de stage, l'agence de communication "Bien encré" produit des émissions sur le sport diffusées en directe sur son site dijon-sportnews.fr. Elle a exprimée le besoin de permettre au spectateur d'interagir avec l'équipe de production pendant les diffusions.</p>
      <p>Solution : le système de visioconférence BigBlueButton qui permet un live interactif avec toutes les fonctionnalités listées dans les besoins du demandeur. C'est un outil libre d'utilisation et adaptable.</p>
      <p>Moyens mis en oeuvre : serveur dédié tournant sous la distribution ubuntu sur un noyau linux</p>
    </div>
    <img class="imagedefilante" onclick="slideLRight()" src="images/concessionautoscreenimg.png" alt="" >
    <img class="imagedefilante" onclick="slideLRight()" src="images/egalitywmsreenimg.png" alt="" >
    <img class="imagedefilante" onclick=""k="slideLRight()" src="images/executivestudyscreenimg.png" alt="" >
  </div>


<?php include 'footer.php' ?>
