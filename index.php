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
