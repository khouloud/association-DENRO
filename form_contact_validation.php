<?php
/**
 * Fomulaire � valider
 */
//var_dump($_POST);
// Par d�faut, je mets tous les champs � NON VALIDE jusqu'� v�rification du contraire

$validation = array(
    'nom' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'email' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'mdp' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
    'c_mdp' => array(
        'is_valid' => false,
        'value' => null,
        'err_msg' => '',
    ),
);
$validation_result = '';


if (array_key_exists(PINSCRI,$_POST)) {

// Champ nom
    $validation['nom']['value'] = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $validation['nom']['is_valid'] = (1 === preg_match('/\w{2,}/', $validation['nom']['value']));

// Champ email
    $validation['email']['value'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $validation['email']['is_valid'] = (false !== filter_var($validation['email']['value'], FILTER_VALIDATE_EMAIL));

// Champ mdp
    $validation['mdp']['value'] = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
    $validation['mdp']['is_valid'] = (1 === preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9a-z!@#$%]{8,20}$/', $validation['mdp']['value']));

    /*the valide password will be like : 1234567a
    Between Start -> ^
    And End -> $
    of the string there has to be at least one number -> (?=.*\d)
    and at least one letter -> (?=.*[a-z])
    and it has to be a number, a letter or one of the following: !@#$% -> [0-9A-Za-z!@#$%]
    and there have to be 8-20 characters -> {8,20}*/

// Champ c_mdp
    $validation['c_mdp']['value'] = filter_input(INPUT_POST, 'c_mdp', FILTER_SANITIZE_STRING);
    $validation['c_mdp']['is_valid'] = ($validation['c_mdp']['value'] == $validation['mdp']['value']);


// Validit� totale du questionnaire : On passe en revue les valeurs 'is_valid' de tous les champs
    $formulaire_valide = true;

    foreach ($validation as $field) {
        if (!$field['is_valid']) {
            $formulaire_valide = false;
            break;

        }
    }

    if ($formulaire_valide == false) {
        $validation_result = '<div class="alert alert-danger" role="alert">Vous n avez pas rempli les champs necessaires</div>';

    } else {

        $validation_result = '<div class="alert alert-success" role="alert">Merci de votre inscription !</div>';

        if(isset($_POST[PINSCRI])){
            $_SESSION[PNOM]=$_POST[PNOM];
            $_SESSION[PEMAIL]=$_POST[PEMAIL];

            header("location: moncompte.php");
        }


    }

}

