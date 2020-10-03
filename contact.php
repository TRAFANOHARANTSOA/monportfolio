<?php include 'header.php' ?>
<?php

$errors=[];

if(!array_key_exists('name', $_POST) || $_POST['name'] == ''){
  $errors['name'] = "Vous n'avez pas remplis le champ nom";
};
if(!array_key_exists('subject', $_POST) || $_POST['subject'] == ''){
  $errors['subject'] = "Vous n'avez pas remplis le champ sujet";
};
if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
  $errors['email'] = "Vous n'avez pas remplis le champ email";
};
if(!array_key_exists('message', $_POST) || $_POST['message'] == ''){
  $errors['message'] = "Vous n'avez pas écris votre message";
};

session_start();
if(!empty($errors)){
  $_SESSION['errors']=$errors; // stocker les données du tableau errors et transvaser ensuite dans footer
  $_SESSION['inputs']=$_POST; //pour stocker les données saisie par l'utilisateur dans le formulaire et transvaser ensuite dans footer
  header("Location: index.php"); // rediriger vers la page de formulaire si l'erreur existe
}else{
  $_SESSION['success']=1;
  $dest='t.rafanoharantsoa@codeur.online';
  $subject=$_POST['subject'];
  $message=$_POST['message'];
  $headers='FROM :'.$_POST['email'];
  mail($dest, $subject, $message, $headers );
  header("Location: index.php"); // rediriger vers la page de formulaire pour gérer le message de succès
}
?>
<?php include 'footer.php' ?>
