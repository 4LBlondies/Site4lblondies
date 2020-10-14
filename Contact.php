<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>4L Blondies</title>
	<link rel="stylesheet" href="style.css">
	
</head>

<header>

<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="Index.html">4L Trophy</a></li>
    <li><a href="Projet.html">Notre Projet &dtrif;</a>
      <ul class="dropdown">
        <li><a href="4L.html">Notre 4L</a></li>
      </ul>
    </li>
    <li><a href="Sponsors.html">Nos Sponsors</a></li>
    <li><a href="Contact.html">Nous Contacter</a></li>
  </ul>
</nav>

</header>

<body>

<div  class="projet">
<p class="marge"></p>

<!--<img src="file.extension" alt="text">-->
<h1> 4L TROPHY <span>| 4L BLONDIES</span> </h1>

<div class="titre">

	<div class="truc1" class="bidule"></div>
	<div> <h2> Nous Contacter </h2> </div>
	<div class="truc2" class="bidule"></div>
	
</div>

<!-- LE FORMULAIRE DE CONTACT -->
<form action="#" onsubmit="temp()" method="post" enctype="text/plain" id="formulaire">
  <h3><label>à :</label> &nbsp 4L Blondies</h3>

  <div id="from">
    <label for="name">de :<span class="required"></span></label>
    <input type="text" id="name" name="user_name">
  </div>

  <div id="reply">
    <label for="mail">Mail :<span class="required"></span></label>
    <input type="email" id="mail" name="user_email">
  </div>

  <div id="message">
    <label for="msg">Votre message :<span class="required"></span></label>
    <textarea id="msg" name="user_message"></textarea>
  </div>
 
  <div class="button">
    <button type="submit">Poster le message</button>
  </div>
</form>

<?php
    if(isset($_POST['user_message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['user_email'] . "\r\n";

        $message = '<h3>Message envoyé</h3>
        <p><b>Nom : </b>' . $_POST['user_name'] . '<br>
        <b>Email : </b>' . $_POST['user_email'] . '<br>
        <b>Message : </b>' . $_POST['user_message'] . '</p>';

        $retour = mail('4lblondies@gmail.com', 'Envoi depuis page Contact', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
?>

<!-- FIN DU FORMULAIRE DE CONTACT -->
<script src="script.js">
</body>

<footer>
<p class="marge"></p>

&copy; Copyright 2020 4L Blondies

<div class="reseaux">
<div><img src="Images/insta.jpg" alt="text"></div>
<div><img src="Images/fb.jpg" alt="text"></div>
<div><img src="Images/snap.jpg" alt="text"></div>
</div>
</footer>

</html>