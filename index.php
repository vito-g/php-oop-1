<?php

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
