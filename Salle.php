<?php

class Salle
{
	//Attributes
	public $Salleid; // type : int
	public $Sallenom; // type : int

    //Getteur ID de la salle
    public function getSalleid()
    {
        return $this->Salleid;
    }

    //Getteur Nom de la salle
    public function getSallenom()
    {
        return $this->Sallenom;
    }

    //Setteur ID de la salle
    public function setSalleid($Salleid)
    {
        $this->Salleid = $Salleid;

        return $this;
    }

    //Setteur Nom de la salle
    public function setSallenom($Sallenom)
    {
        $this->Sallenom = $Sallenom;

        return $this;
    }

    //Constructeur de la classe Etablissement
    public function __construct($Salleid, $Sallenom){

      $this->setSalleid($Salleid);
      $this->setSallenom($Sallenom);

    }

}


?>
