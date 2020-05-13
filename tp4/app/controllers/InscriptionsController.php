<?php
namespace controllers;

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
}
