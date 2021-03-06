<?php
namespace controllers;

use models\Inscription;
use Ubiquity\orm\DAO;
use Ubiquity\utils\http\URequest;
use Ubiquity\utils\http\UResponse;
use Ubiquity\utils\http\USession;

 /**
 * Controller InscriptionsController
 **/

class InscriptionsController extends ControllerBase{

	public function index(){
		$this->loadView("InscriptionsController/index.html");
	}

	public function inscription(){
    $this->loadView('InscriptionsController/inscription.html');
  }

	public function do(){
		$var = new Inscription();
        $var->setNom($_POST["nomoupseudo"]);
        $var->setEmail($_POST["adressemail"]);
				if(DAO::insert($var)){
		          echo "Votre inscription à fonctionnée, vous allez être redirigé";
		            UResponse::header("location" ,"/inscriptionsController/index");
		        }
				else{
					 		echo "<div class='ui message'><p>Votre inscription n'a pas fonctionnée</p><a href='/inscriptionsController/inscription'>Retour à l'accueil</a></div>";
						}
	}
}
