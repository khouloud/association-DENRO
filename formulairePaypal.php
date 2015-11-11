<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
     <!--Indication du montant HT du panier ou TTC si la TVA n'est pas détaillée */-->
    <input name="amount" type="text" value="Entrer la valeur du don aue vous voulez l ajouter" />
     <!--Indication de la devise -->
    <input name="currency_code" type="hidden" value="EUR" />
     <!--Indication du montant des frais de port -->
    <input name="shipping" type="hidden" value="0" />
     <!--Indication du montant de la TVA (ou 0.00) -->
    <input name="tax" type="hidden" value="0.00" />
     <!--Indication de l'URL de retour automatique -->
    <input name="return" type="hidden" value="http://127.0.0.1/p68_exo/reussi.php" />
     <!--Indication de l'URL de retour si annulation du paiement -->
    <input name="cancel_return" type="hidden" value="http://127.0.0.1/p68_exo/annulation.php" />
    <!--Indication de l'URL de retour pour contrôler le paiement -->
    <input name="notify_url" type="hidden" value=http://127.0.0.1/p68_exo/ipn.php />
     <!--Indication du type d'action -->
    <input name="cmd" type="hidden" value="_xclick" />
     <!--Indication de l'adresse e-mail test du vendeur (a remplacer par l'e-mail de votre compte Paypal en production) -->
    <input name="business" type="hidden" value="khouloudbenmim-facilitator@gmail.com" />
     <!--Indication du libellé de la commande qui apparaitra sur Paypal -->
    <input name="item_name" type="hidden" value="Le texte que vous voulez" />
     <!--Indication permettant à l'acheteur de laisser un message lors du paiement -->
    <input name="no_note" type="hidden" value="1" />
     <!--Indication de la langue -->
    <input name="lc" type="hidden" value="FR" />
     <!--Indication du type de paiement -->
    <input name="bn" type="hidden" value="PP-BuyNowBF" />
     <!--Indication du numéro de la commande (très important) -->
    <input name="custom" type="hidden" value="5478" />
     <!--Bouton pour valider le paiement -->
    <input class="bouton" type="submit" value="Payer" />
</form>
</body>
</html>