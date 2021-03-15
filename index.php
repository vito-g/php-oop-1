<?php

//Creazione Classe
class Vino {

  public $nome;

  public $nazione;

  public $regione;

  public $zonaProduzione;

  public $indicazione;

  public $tipologia;

  public $vitigno;

  public function __construct($nome, $nazione, $regione, $zonaProduzione, $indicazione, $tipologia, $vitigno) {
    $this->nome = $nome;
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
$Platone = new Vino('Platone', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', '50% Primitivo 50% Negroamaro');
echo $Platone->nazione . '<br>';
echo $Platone->regione . '<br>';
echo $Platone->zonaProduzione . '<br>';
echo $Platone->indicazione . '<br>';
echo $Platone->tipologia . '<br>';
echo $Platone->vitigno . '<br>';

echo '<br>';

$Taras = new Vino('Taras', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', 'Primitivo');
echo $Taras->nazione . '<br>';
echo $Taras->regione . '<br>';
echo $Taras->zonaProduzione . '<br>';
echo $Taras->indicazione . '<br>';
echo $Taras->tipologia . '<br>';
echo $Taras->vitigno . '<br>';

echo '<br>';

$Mediterraneo = new Vino('Mediterraneo', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosato', 'Negramaro');
echo $Mediterraneo->nazione . '<br>';
echo $Mediterraneo->regione . '<br>';
echo $Mediterraneo->zonaProduzione . '<br>';
echo $Mediterraneo->indicazione . '<br>';
echo $Mediterraneo->tipologia . '<br>';
echo $Mediterraneo->vitigno . '<br>';

echo '<br>';

$Felicità = new Vino('Felicità', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Bianco', '70% Sauvignon 30% Chardonnay');
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

//Creazione Oggetto Relativo a Classe AziendaVinicola attraverso la FX 'costruttore'
$vinicolaAlbano = new AziendaVinicola('Azienda Vinicola Albano');

//Addizionamento di Oggetti Vino nell' Oggetto 'Azienda Vinicola ALbano' di Classe 'AziendaVinicola' attraverso la FX 'addVino'
$vinicolaAlbano->addVino($Platone);
$vinicolaAlbano->addVino($Taras);
$vinicolaAlbano->addVino($Mediterraneo);
$vinicolaAlbano->addVino($Felicità);
//Stampa a schermo
var_dump($vinicolaAlbano);

//Creazione Nuovo Oggetto Relativo a Classe AziendaVinicola attraverso la FX 'costruttore'
$lArchetipo = new AziendaVinicola('Azienda Vinicola l\'Archetipo');
//Stampa a schermo
var_dump($lArchetipo);
