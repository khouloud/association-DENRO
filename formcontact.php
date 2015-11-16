<?php
        $result='';
        $Email='';
        $Name='';
        $Message='';

    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = 'Denro';
        $to = 'denro.association@gmail.com';
        $subject = 'Message de association Denro.com ';

        $body ="De: $name\n E-Mail: $email\n Message:\n $message";

    // Regarde si l'e-mail a été entre
    if (!$_POST['name']) {
        $Name = 'Entrez votre nom';
    }

    // Regarde si l'e-mail entre est valide
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $Email = 'Entrez une adresse Mail valide';
    }

    //Regarde si le message a ete entre
    if (!$_POST['message']) {
        $Message = 'Entrez un message';
    }

    // Si il n'y a pas d'erreur envoyer le mail
    if (!$Name && !$Email && !$Message) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success" role="alert">Merci de votre participation !</div>';
        } else {
            $result='<div class="alert alert-danger" role="alert">Desole votre message n as pas ete envoye,Merci de retenter plus tard"</div>';
        }
    }
}


?>

