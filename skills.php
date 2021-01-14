<?php include 'header.php'; ?>
<?php session_start();?>
<section id="myskillspage" >

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
<h1 id="titlefrontend" onmouseover="openFrontendSkillList()" onmouseout="closeFrontendSkillList()">FRONT-END </h1>

    <div id="frontendskilllist" >
    <ul >
      <li> <i class="fas fa-play"></i> Maquettage, wireframing</li>
      <li><i class="fas fa-play"></i> Réalisation de pages Web : HTML,CSS,JAVASCRIPT,Bootstrap</li>
      <li><i class="fas fa-play"></i> Développement d’applications Web</li>
      <li><i class="fas fa-play"></i> Gestion de la sécurité / accessibilité / ergonomie / responsivité</li>
    </ul>
    <div class="skillsiconsimage">
      <img src="images/ps.png" class ="iconps" alt="">
      <img src="images/ai.png" class ="iconai" alt="">
      <img src="images/xd.png" class ="iconxd" alt="">
      <img src="images/css.png" class ="iconcss" alt="">
      <img src="images/html.png" class ="iconhtml" alt="">
      <img src="images/wp.png" class ="iconwp" alt="">
      <img src="images/js.png" class ="iconjs" alt="">
      <!-- <div class="">
        <img src="images/arrow.png" class ="iconarrow" alt="" onclick="closeFrontendSkillList()">
      </div> -->
    </div>

  </div>
  </div>
  <div id="backend">
    <h1 onmouseover="openBackendSkillList()" onmouseout="closeBackendSkillList()">BACK-END</h1>
    <div id="backendskilllist">
      <div>
    <ul>
      <li><i class="fas fa-play"></i> Conception & exploitation de bases de données relationnelle MySQL</li>
      <li><i class="fas fa-play"></i> Développement d'application Web en PHP / MySQL</li>
      <li><i class="fas fa-play"></i> Développement sécurisé et documenté d’API</li>
      <li><i class="fas fa-play"></i> Publication sur le web de sites et applications : FTP, SSH</li>
    </ul>
      </div>
      <div>
      <img src="images/php.png" class ="iconphp" alt="">
      <img src="images/mysql.png" class ="iconmysql" alt="">
      <!-- <div class="">
      <a href="#"><img src="images/arrow.png" class ="iconarrow" alt="" onclick="closeBackendSkillList()"></a>
      </div> -->
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
  </div>
  <div id="Gestiondeprojet">
    <h1 onmouseover="openProjectSkillList()" onmouseout="closeProjectSkillList()">GESTION DE PROJET</h1>
    <div id="projectskilllist">
      <div>
      <ul>
        <li><i class="fas fa-play"></i> Initialisation d'un projet : recueil et analyse des besoins, cadrage, planification, budgetisation</li>
        <li><i class="fas fa-play"></i> Lancement d'un projet : confection du cahier des charges</li>
        <li><i class="fas fa-play"></i> Conception d'un projet : création d'une charte graphique, d'une maquette, d'un prototype</li>
        <li><i class="fas fa-play"></i> Réalisation d'un projet : intégration des éléments de la conception</li>
        <li><i class="fas fa-play"></i> Suivi et exploitation : référencement, retours utilisateurs, </li>
      </ul>
      </div>
      <!-- <div class="">
        <a href="#"><img src="images/arrow.png" class ="iconarrow" alt="" onclick="closeProjectSkillList()"></a>
      </div> -->
    </div>

  </div>

  <div id="formation">
    <h1 onmouseover="openStudySkillList()" onmouseout="closeStudySkillList()">FORMATIONS</h1>
    <div id="studyskilllist">
      <div>
      <ul>
        <li><i class="fas fa-circle"></i> 05/2020  Formation Designer Web - Access Code School de Dijon </li>
        <li><i class="fas fa-circle"></i> 02/2020  Dispositif en Amont de la Qualification (DAQ) Parcours à coloration numérique  - IRFA BFC </li>
        <li><i class="fas fa-circle"></i> 06/2010  Diplôme Supérieur Spécialisé en Sciences Comptables  - INSCAE Madagascar </li>
      </ul>
      </div>
      <!-- <div class="">
        <a href="#"><img src="images/arrow.png" class ="iconarrow" alt="" onclick="closeStudySkillList()"></a>
      </div> -->
    </div>

  </div>
  <div  id="experiences">
    <h1 onmouseover="openExperienceSkillList()" onmouseout="closeExperienceSkillList()">EXPERIENCES</h1>
    <div id="experienceskilllist">
      <div>
      <ul>
        <li><i class="fas fa-circle"></i> 05/2017 - 07/2018 ASSISTANT COMPTABLE</li>
        <li><i class="fas fa-circle"></i> 03/2013 - 02/2017 CONTRÔLEUR PERMANENT </li>
      </ul>
    </div>
      <!-- <div class="">
        <a href="#"><img src="images/arrow.png" class ="iconarrow" alt="" onclick="closeExperienceSkillList()"></a>
      </div> -->
    </div>
  </div>
</div>
</section>
<?php include 'footer.php' ?>
