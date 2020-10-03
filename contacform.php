<?php session_start();?>
<?php include 'header.php' ?>
<section id="contact">

            <div class="container  bg-transparent pt-2">
              <div class="page-header text-center">
                <h1>CONTACT</h1>
                <p>Ecrivez moi.</p>
                <hr class="rupture">
              </div>

              <?php if(array_key_exists('errors', $_SESSION)): ?> <!--afficher les erreurs dans session, ":" remplace une balise ouvrante et endif une fermente pour rassemlber des instructions dauns un seul bloc.-->
                  <div class="alert alert-danger">
                    <?php echo implode('<br>', $_SESSION['errors']);?> <!--implode récupère les clés d'un tableau comme chaine de caractère-->
                  </div>
              <?php  endif; ?> <!--unset détruit la variable (dans une fonction locale)-->

              <?php if(array_key_exists('success', $_SESSION)): ?> <!--afficher les erreurs dans session, ":" remplace une balise ouvrante et endif une fermente pour rassemlber des instructions dauns un seul bloc.-->
                  <div class="alert alert-success">
                    Votre message a été envoyé avec succès.
                  </div>

              <?php  endif;?>


              <form action ="contact.php" method="post" novalidate>
                <div class="form-group">
                      <label for="yourname"> Nom   </label>
                      <input type="text text-light" id ="yourname" class="form-control" name="name" value="<?php echo isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                      <span class="text-light errorname" aria-live ="polite" > </span>
                </div>
                <div class="form-group">
                      <label for="subject"> Sujet </label>
                      <input type="text text-light" id="subject"  class="form-control" name="subject"  value="<?php echo isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                      <span class="text-light errorsubject" aria-live ="polite" > </span>
                </div>
                <div class="form-group ">
                      <label for="mail"> Adresse email </label>
                      <input type="text" id ="mail"   class="form-control" name="email"  value="<?php echo isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>" > <br>
                      <span class="text-light erroremail" aria-live ="polite" > </span>

                </div>
                <div class="form-group">
                        <label for="message">Ecrivez votre message en dessous</label>
                        <textarea class="form-control "  id="message" rows="5" name="message"
                         > <?php echo isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?></textarea>
                </div>

                      <button type="submit" name="submit" value="envoyer" class="btn btnfooter"> Envoyer </button>
              </form>

              <h2 class="text_center mt-4"> Mes réseaux sociaux </h2>
              <div class="row mt-2 justify-content-center">

                <div class="col 2  col-md-1">
                  <a class="linkedin" href="https://www.linkedin.com/in/rafanoharantsoa-tsiry/" target="blank"> <i class="fab fa-linkedin-in faviconfooter"></i></a>
                </div>
                <div class="col 2 col-md-1">
                  <a class="pinterest" href="https://github.com/TRAFANOHARANTSOA" target="blank"> <i class="fab fa-github faviconfooter"></i> </a>
                </div>
              </div>
          </div>
    </section>
<?php include 'footer.php' ?>
