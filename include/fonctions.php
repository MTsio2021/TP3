<?php
/* connection bdd */

Class PdoTp3{
    
    private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=tp3';   		
      	private static $user='root' ;    		
      	private static $mdp='' ;	
	private static $monPdo;
	private static $monPdoTp3=null;
        
        
        /**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */				
	private function __construct(){
    	PdoTp3::$monPdo = new PDO(PdoTp3::$serveur.';'.PdoTp3::$bdd, PdoTp3::$user, PdoTp3::$mdp); 
		PdoTp3::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		PdoTp3::$monPdo = null;
	}

    /**
 * Fonction statique qui crée l'unique instance de la classe
 
 * Appel : $instancePdoTp3 = PdoTp3::getPdoTp3();
 
 * @return l'unique objet de la classe PdoTp3
 */
	public  static function getPdoTp3(){
		if(PdoTp3::$monPdoTp3==null){
			PdoTp3::$monPdoTp3= new PdoTp3();
		}
		return PdoTp3::$monPdoTp3;  
	}

    public function ajouterCiterneStandard($designation, $nbCompartiment, $longueur, $hauteur, $profondeur, $forme, $prix){

		//$req = "insert into citerne (`designation`, `nbcompartiment`) values('$designation', $nbCompartiment)";
		//$req2 = "insert into standard (`designation`, `nbcompartiment`, `longueur`, `hauteur`, `profondeur`, `forme`, `prix`) values('$designation', $nbCompartiment, $longueur, $hauteur, $profondeur, '$forme', $prix);";
		$req3 = "CALL `AjouterUneCiterneStandard` ('$designation', $nbCompartiment, $longueur, $hauteur, $profondeur, '$forme', $prix);";

		PdoTp3::$monPdo->exec($req3);
        //PdoTp3::$monPdo->exec($req2);

    }

    public function ajouterCiterneSpecifique($designation, $nbCompartiment, $planPdf){

		//$req = "insert into citerne (`designation`, `nbcompartiment`) values('$designation', $nbCompartiment)";	
		//$req2 = "insert into specifique (`designation`, `nbcompartiment`, `PLANCITERNEPDF`) values('$designation', $nbCompartiment,'$planPdf');";
		$req3 = "CALL `AjouterUneCiterneSpecifique` ('$designation', $nbCompartiment, '$planPdf');";

		PdoTp3::$monPdo->exec($req3);
		//PdoTp3::$monPdo->exec($req);
        //PdoTp3::$monPdo->exec($req2);

    }

    public function ajouterCiterneCylindrique($designation, $nbCompartiment, $longueur, $rayon, $prix){

        //$req = "insert into citerne (`designation`, `nbcompartiment`) values('$designation', $nbCompartiment)";
        //$req2 = "insert into cylindrique (`designation`, `nbcompartiment`, `longueur`, `rayon`, `prix`) values('$designation', $nbCompartiment, $longueur, $rayon, $prix);";

		$req3 = "CALL `AjouterUneCiterneCylindrique` ('$designation', $nbCompartiment, $longueur, $rayon, $prix);";

		PdoTp3::$monPdo->exec($req3);

        //PdoTp3::$monPdo->exec($req);
        //PdoTp3::$monPdo->exec($req2);

    }

	public function ajouterClient($nom,$adresse,$cp,$ville,$tel,$fax,$login,$mdp){

		$req = "insert into client (`nom`,`adresse`,`codepostal`,`ville`,`telephone`,`login`,`motdepasse`) values('$nom','$adresse','$cp','$ville','$tel','$login','$mdp');";

		PdoTp3::$monPdo->exec($req); 

		$req2 = "select max(nclient) from client";

		$res = PdoTp3::$monPdo->query($req2);

		$id = $res->fetch(PDO::FETCH_NUM);

		$req3 = "insert into `professionnel`(`NCLIENT`, `NSIRET`, `FAX`, `NOM`, `ADRESSE`, `CODEPOSTAL`, `VILLE`, `TELEPHONE`, `LOGIN`, `MOTDEPASSE`) values ($id[0],'nsiret','$fax','$nom','$adresse','$cp','$ville','$tel','$login','$mdp');";

		PdoTp3::$monPdo->exec($req3); 
	}

	public function ajouterContact($nc,$nom,$prenom,$fonction,$mail)
	{
		$req = "select max(nclient) from client";

		$res = PdoTp3::$monPdo->query($req);

		$id = $res->fetch(PDO::FETCH_NUM);

		$req2 = "CALL `AjouterUnContact`($nc,'$nom','$prenom','$fonction','$mail',$id[0]);";

		$req2;
		PdoTp3::$monPdo->exec($req2);
	}


}