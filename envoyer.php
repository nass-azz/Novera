<?php
// Récupérer les données du formulaire
$nom = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Configuration du destinataire et de l'objet
$to = "media.novera@gmail.com";  // Remplacez par votre adresse email Hostinger
$subject = "Nouveau message de contact de $nom";

// Corps du message
$body = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";

// En-têtes de l'email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// Envoi de l'email
if (mail($to, $subject, $body, $headers)) {
    echo "Votre message a été envoyé avec succès.";
} else {
    echo "Erreur : Nous n'avons pas pu envoyer votre message.";
}
?>
