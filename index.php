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
$platone = new Vino('Platone', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', '50% Primitivo 50% Negroamaro');
// echo $platone->nazione . '<br>';
// echo $platone->regione . '<br>';
// echo $platone->zonaProduzione . '<br>';
// echo $platone->indicazione . '<br>';
// echo $platone->tipologia . '<br>';
// echo $platone->vitigno . '<br>';

// echo '<br>';

$taras = new Vino('Taras', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosso', 'Primitivo');

$mediterraneo = new Vino('Mediterraneo', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Rosato', 'Negramaro');

$felicità = new Vino('Felicità', 'Italia', 'Puglia', 'Cellino San Marco', 'IGP Salento', 'Vino Bianco', '70% Sauvignon 30% Chardonnay');





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
$vinicolaAlbano->addVino($platone);
$vinicolaAlbano->addVino($taras);
$vinicolaAlbano->addVino($mediterraneo);
$vinicolaAlbano->addVino($felicità);
//Stampa a schermo
var_dump($vinicolaAlbano);

//Creazione Nuovo Oggetto Relativo a Classe AziendaVinicola attraverso la FX 'costruttore'
$lArchetipo = new AziendaVinicola('Azienda Vinicola l\'Archetipo');
//Stampa a schermo
var_dump($lArchetipo);
