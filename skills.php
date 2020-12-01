<?php include 'header.php'; ?>
<?php session_start();?>
<section id="myskillspage" >
  <!-- <div  class="myskills">
    <ul class="myskillsicons">
      <li class="allskills"><img src ="images/ps.png" class="iconps"/></li>
      <li class="allskills"><img src ="images/ai.png" class="iconai"/></li>
      <li class="allskills"><img src ="images/xd.png" class="iconxd"/></li>
      <li class="allskills"><img src ="images/css.png" class="iconcss"/></li>
      <li class="allskills"><img src ="images/html.png" class="iconhtml "/></li>
      <li class="allskills"><img src ="images/js.png" class="iconjs"/></li>
      <li class="allskills"><img src ="images/wp.png" class="iconwp"/></li>
      <li class="allskills"><img src ="images/php.png" class="iconphp"/></li>
      <li class="allskills"><img src ="images/mysql.png" class="iconmysql"/></li>
    </ul>
  </div> -->
<div class="animface">
  <div class="animfacewrap">
    <img src="images/face1.png" alt="">
    <img src="images/face2.png" alt="">
    <img src="images/face3.png" alt="">
    <img src="images/face5.png" alt="">
  </div>
</div>
<div class="skillsdomain">
<div id="frontend">
<h1 id="titlefrontend" onmouseover="openFrontendSkillList()" onmouseout="closeFrontendSkillList()">FRONT-END</h1>

    <div id="frontendskilllist">
    <hr class="rupture1">
    <ul>
      <li>Maquettage, wireframing</li>
      <li>Réalisation de pages Web : HTML,CSS,JAVASCRIPT,Bootstrap</li>
      <li>Développement d’applications Web</li>
      <li>Gestion de la sécurité / accessibilité / ergonomie / responsivité</li>
    </ul>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/ps.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/ai.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/xd.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/css.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/html.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/wp.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/js.png" alt="">
      </div>
    </div>
    </div>
  </div>
  <div id="backend">
    <h1 onmouseover="openBackendSkillList()" onmouseout="closeBackendSkillList()">BACK-END</h1>
    <div id="backendskilllist">
    <ul>
      <li>Conception & exploitation de bases de données relationnelle MySQL</li>
      <li>Développement d'application Web en PHP / MySQL</li>
      <li>Développement sécurisé et documenté d’API</li>
      <li>Publication sur le web de sites et applications : FTP, SSH</li>
    </ul>
    </div>
    <!-- <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/php.png" alt="">
      </div>
    </div>
    <div class="animface">
      <div class="animfacewrap">
        <img class="skillsicons" src="images/mysql.png" alt="">
      </div>
    </div>-->

  </div>
  <div id="Gestiondeprojet">
    <h1 onmouseover="openProjectSkillList()" onmouseout="closeProjectSkillList()">GESTION DE PROJET</h1>
    <div id="projectskilllist">
      <ul>
        <li>Travail collaboratif : GITHUB</li>
        <li>Pilotage de projet : recueil des besoins, développement, livraison</li>
      </ul>
    </div>
  </div>

  <div id="formation">
    <h1 onmouseover="openStudySkillList()" onmouseout="closeStudySkillList()">FORMATIONS</h1>
    <div id="studyskilllist">
      <ul>
        <li>05/2020 - Formation Designer Web - Access Code School de Dijon </li>
        <li>02/2020 - Dispositif en Amont de la Qualification (DAQ) Parcours à coloration numérique  - IRFA BFC </li>
        <li>06/2010 - Diplôme Supérieur Spécialisé en Sciences Comptables  - INSCAE Madagascar </li>
      </ul>
    </div>
  </div>
  <div  id="experiences">
    <h1 onmouseover="openExperienceSkillList()" onmouseout="closeExperienceSkillList()">EXPERIENCES</h1>
    <div id="experienceskilllist">
      <ul>
        <li>ASSISTANT COMPTABLE</li>
        <li>CONTRÔLEUR PERMANENT </li>
      </ul>
    </div>
  </div>
</div>
</section>
<?php include 'footer.php' ?>
