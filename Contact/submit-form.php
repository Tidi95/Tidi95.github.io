<?php
    // Récupère les données envoyées par le formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Définit les paramètres de l'e-mail à envoyer
    $to = "nimportequoi0203@gmail.com"; // Adresse e-mail du destinataire
    $subject = "Nouveau message de contact"; // Sujet de l'e-mail
    $body = "Nom: " . $name . "\nEmail: " . $email . "\nMessage:\n" . $message;"\n\n" // Corps de l'e-mail
    $headers = "From: " . $email; // Entêtes de l'e-mail (spécifie l'expéditeur)

    // Envoie l'e-mail en utilisant la fonction mail() de PHP
    if (mail($to, $subject, $body, $headers)) {
        echo "Le message a été envoyé.";
    } else {
        echo "Il y a eu une erreur lors de l'envoi du message.";
    }
?>