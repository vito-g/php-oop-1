<?php

//Creazione Classe Vino
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
//End Creazione Classe Vino

//Creazione Oggetti di Classe Vino  (attraverso la FX 'costruttore')
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
$mistico = new Vino('Mistico', 'Italia', 'Puglia', 'Castellaneta Marina', 'IGP Salento', 'Vino Rosso', 'Primitivo');
$niuruMaru = new Vino('Niuru Maru', 'Italia', 'Puglia', 'Castellaneta Marina', 'IGP Salento', 'Vino Rosso', 'Negroamaro');
$verdecaSetteLune = new Vino('Verdeca Sette Lune', 'Italia', 'Puglia','Castellaneta Marina', 'IGP Salento', 'Vino Bianco', 'Verdeca');
$grecoBianco = new Vino('Greco Bianco', 'Italia', 'Puglia','Castellaneta Marina', 'IGP Salento', 'Vino Bianco', 'Greco Bianco');
//End Creazione Oggetti di Classe Vino

// ----------------------------------------------------------------------------------------------------------------------------------------

//Creazione Classe AziendaVinicolaPugliese
class AziendaVinicolaPugliese {
  public $nome;

  public $vini = [];

  public function __construct($nome) {
    $this->nome = $nome;
  }

  public function addVino($vino) {
    $this->vini[] = $vino;
  }

  public function getNomeVini() {
    echo 'I vini dell\' ' . '<b>' . $this->nome . '</b> sono: <br>' ;
    for ($i = 0 ; $i < count($this->vini); ++$i) {
      print_r('<ul><li>' . $this->vini[$i]->nome . '</li></ul>');
    }
  }
}
//End Creazione Classe AziendaVinicolaPugliese

//Creazione Oggetti di Classe AziendaVinicolaPugliese (attraverso la FX 'costruttore')
$vinicolaAlbano = new AziendaVinicolaPugliese('Azienda Vinicola Albano');
$lArchetipo = new AziendaVinicolaPugliese('Azienda Vinicola l\'Archetipo');
//End Creazione Oggetti di Classe AziendaVinicola

// -------------------------------------------------------------------------------------------------------------

//Addizionamento di Oggetti Vino negli Oggetti di Classe 'AziendaVinicola' (attraverso la FX 'addVino')
$vinicolaAlbano->addVino($platone);
$vinicolaAlbano->addVino($taras);
$vinicolaAlbano->addVino($mediterraneo);
$vinicolaAlbano->addVino($felicità);
$lArchetipo->addVino($mistico);
$lArchetipo->addVino($niuruMaru);
$lArchetipo->addVino($verdecaSetteLune);
$lArchetipo->addVino($grecoBianco);
//End Addizionamento di Oggetti Vino negli Oggetti di Classe 'AziendaVinicola'

//Stampa a schermo
var_dump($vinicolaAlbano);
$vinicolaAlbano->getNomeVini();
var_dump($lArchetipo);
$lArchetipo->getNomeVini();
//End Stampa a schermo
