<?php

class etablissement
{

  public $Etsid;
  public $Etsnom;
  public $mesSalles;

    //Getteur Id de l'Etablissement
    public function getmesSalles()
    {
        return $this->mesSalles;
    }

    //Getteur Id de l'Etablissement
    public function getEtsid()
    {
        return $this->Etsid;
    }

    //Getteur Nom de l'Etablissement
    public function getEtsnom()
    {
        return $this->Etsnom;
    }


    //Setteur Id de l'Etablissement
    public function setEtsid($Etsid)
    {
        $this->Etsid = $Etsid;

        return $this;
    }

    //Setteur nom de l'Etablissement
    public function setEtsnom($Etsnom)
    {
        $this->Etsnom = $Etsnom;

        return $this;
    }

    //Setteur mesSalles de l'Etablissement
    public function setmesSalles($mesSalles)
    {
        $this->mesSalles = $mesSalles;

        return $this;
    }

  //Constructeur de la classe Etablissement
  public function __construct($Etsid, $Etsnom, $mesSalles){

    $this->setEtsid($Etsid);
    $this->setEtsnom($Etsnom);
    $this->setmesSalles($mesSalles);

  }




}

?>
