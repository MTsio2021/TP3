<?php 

require_once("include/fonctions.php");
session_start();
$pdo = PdoTp3::getPdoTp3();

include("vues/sous-vues/entete.php");

if(!isset($_REQUEST['action']))
{
    $action = 'accueil';
}
else {
    $action = $_REQUEST['action'];
}

switch($action){

    case 'accueil':
        include("vues/accueil.php");
    break;

    case 'FormCy':
        include("vues/FormCiterneCylindrique.php");
    break;

    case 'FormSt':
        include("vues/FormCiterneStandard.php");
    break;

    case 'FormSp':
        include("vues/FormCiterneSpecifique.php");
    break;

    case 'FormCt':
        include("vues/FormContact.php");
    break;


    case 'addCy':

        $design = $_POST['designation'];
        $nbComp = $_POST['nbCompartiment'];
        $long = $_POST['longueur'];
        $rayon = $_POST['rayon'];
        $prix = $_POST['prix'];

        $pdo->ajouterCiterneCylindrique($design,$nbComp,$long,$rayon,$prix);

        include("vues/ajoutReussi.php");
    break;

    case 'addSt':

        $design = $_POST['designation'];
        $nbComp = $_POST['nbCompartiment'];
        $long = $_POST['longueur'];
        $hauteur = $_POST['hauteur'];
        $profondeur = $_POST['profondeur'];
        $forme = $_POST['forme'];
        $prix = $_POST['prix'];

        $pdo->ajouterCiterneStandard($design,$nbComp,$long,$hauteur,$profondeur,$forme,$prix);

        include("vues/ajoutReussi.php");
    break;

    case 'addSp':

        $design = $_POST['designation'];
        $nbComp = $_POST['nbCompartiment'];
        $plan = $_FILES['planpdf']['name'];
        
        $pdo->ajouterCiterneSpecifique($design,$nbComp,$plan);

        include("vues/ajoutReussi.php");
    break;

    case 'addCt':
        
        $nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $cp = $_POST['cp'];
        $ville = $_POST['ville'];
        $tel = $_POST['tel'];
        $fax = $_POST['fax'];
        $login = $_POST['login'];
        $mdp = $_POST['motDePasse'];
        $cmdp = $_POST['confirmeMotDePasse'];

        if(($mdp == "") || ($cmdp == ""))
        {

            echo "Mot de passe non renseigné";

        }
        else if(($mdp == $cmdp)){

            $pdo->ajouterClient($nom,$adresse,$cp,$ville,$tel,$fax,$login,$mdp);

            $nomc1 = $_POST['nomc1'];
            $prenomc1 = $_POST['prenomc1'];
            $fonctionc1 = $_POST['fonctionc1'];
            $mailc1 = $_POST['mailc1'];

            if(($nomc1 != "") && ($prenomc1 != "") && ($fonctionc1 != "") && ($mailc1 != ""))
            {   

                $pdo->ajouterContact(1,$nomc1,$prenomc1,$fonctionc1,$mailc1);
            }

            $nomc2 = $_POST['nomc2'];
            $prenomc2 = $_POST['prenomc2'];
            $fonctionc2 = $_POST['fonctionc2'];
            $mailc2 = $_POST['mailc2'];

            if(($nomc2 != "") && ($prenomc2 != "") && ($fonctionc2 != "") && ($mailc2 != ""))
            {   

                $pdo->ajouterContact(2,$nomc2,$prenomc2,$fonctionc2,$mailc2);
            }

            $nomc3 = $_POST['nomc3'];
            $prenomc3 = $_POST['prenomc3'];
            $fonctionc3 = $_POST['fonctionc3'];
            $mailc3 = $_POST['mailc3'];

            if(($nomc3 != "") && ($prenomc3 != "") && ($fonctionc3 != "") && ($mailc3 != ""))
            {   

                $pdo->ajouterContact(3,$nomc3,$prenomc3,$fonctionc3,$mailc3);
            }
        }
        else
        {
            echo "Les 2 mots de passe ne sont pas identique";
        }

        include('vues/ajoutReussiContact.php');
    break;
    
}


?>