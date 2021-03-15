<?php

//Creazione Classe
class Vino {
  public $nazione;

  public $regione;

  public $zonaProduzione;

  public $indicazione;

  public $tipologia;

  public $vitigno;

  public function __construct($nazione, $regione, $zonaProduzione, $indicazione, $tipologia, $vitigno) {
    $this->nazione = $nazione;
    $this->regione = $regione;
    $this->zonaProduzione = $zonaProduzione;
    $this->indicazione = $indicazione;
    $this->tipologia = $tipologia;
    $this->vitigno = $vitigno;
  }
}
//End Creazione Classe


//Creazione Oggetti
$Platone = new Vino('Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', '50% Primitivo 50% Negroamaro');
echo $Platone->nazione . '<br>';
echo $Platone->regione . '<br>';
echo $Platone->zonaProduzione . '<br>';
echo $Platone->indicazione . '<br>';
echo $Platone->tipologia . '<br>';
echo $Platone->vitigno . '<br>';

echo '<br>';

$Taras = new Vino('Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', 'Primitivo');
echo $Taras->nazione . '<br>';
echo $Taras->regione . '<br>';
echo $Taras->zonaProduzione . '<br>';
echo $Taras->indicazione . '<br>';
echo $Taras->tipologia . '<br>';
echo $Taras->vitigno . '<br>';

echo '<br>';

$Mediterraneo = new Vino('Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosato', 'Negramaro');
echo $Mediterraneo->nazione . '<br>';
echo $Mediterraneo->regione . '<br>';
echo $Mediterraneo->zonaProduzione . '<br>';
echo $Mediterraneo->indicazione . '<br>';
echo $Mediterraneo->tipologia . '<br>';
echo $Mediterraneo->vitigno . '<br>';

echo '<br>';

$Felicità = new Vino('Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Bianco', '70% Sauvignon 30% Chardonnay');
echo $Felicità->nazione . '<br>';
echo $Felicità->regione . '<br>';
echo $Felicità->zonaProduzione . '<br>';
echo $Felicità->indicazione . '<br>';
echo $Felicità->tipologia . '<br>';
echo $Felicità->vitigno . '<br>';
//End Creazione Oggetti

//Creazione Nuova Classe
class AziendaVinicola {
  public $nome;

  public $vini = [];

  public function __construct($nome) {
    $this->nome = $nome;
  }

  public function addVino($vino) {
    $this->vini[] = $vino;
  }
}
//End Creazione Nuova Classe

//Creazione Oggetti Relativi a Classe AziendaVinicola
$vinicolaAlbano = new AziendaVinicola('Azienda Vinicola Albano');
var_dump($vinicolaAlbano);
