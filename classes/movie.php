<?php

class Movie
{
  public $titolo; //string
  public $titolo_originale; //string
  public $regista; //string
  public $casa_produttrice; //[string, ..., string]
  public $durata; //int(minuti)
  public $genere; //[string, ..., string]
  public $anno_produzione; //YYYY
  public $lingua_originale; //string
  public $valutazioni; //[int(voto critica/100), int(voto pubblico/100)]
  public $botteghino; //int(dollari)
  public $cast; //[string(attore), ..., string(attore)]
  public $colonna_sonora; //string
  public $oscar_nomination; //int
  public $oscar; //[int(nomination), int(vinti)]
  public $eta_minima; //int(eta)
  public $piattaforme_streaming; //[string(nome), string(link), ..., string(nome), string(link)]
  public $poster;

  public function __construct(
    $_titolo,
    $_titolo_originale,
    $_regista,
    $_casa_produttrice,
    $_durata,
    $_genere,
    $_anno_produzione,
    $_lingua_originale,
    $_valutazioni,
    $_botteghino,
    $_cast,
    $_colonna_sonora,
    $_oscar,
    $_eta_minima,
    $_piattaforme_streaming,
    $_poster
  ) {
    $this->titolo = $_titolo;
    $this->titolo_originale = $_titolo_originale;
    $this->regista = $_regista;
    $this->casa_produttrice = $_casa_produttrice;
    $this->durata = $_durata;
    $this->genere = $_genere;
    $this->anno_produzione = $_anno_produzione;
    $this->lingua_originale = $_lingua_originale;
    $this->valutazioni = $_valutazioni;
    $this->botteghino = $_botteghino;
    $this->cast = $_cast;
    $this->colonna_sonora = $_colonna_sonora;
    $this->oscar = $_oscar;
    $this->eta_minima = $_eta_minima;
    $this->piattaforme_streaming = $_piattaforme_streaming;
    $this->poster = $_poster;
  }

  public function getTitle()
  {
    if ($this->sameTitle()) {
      return $this->titolo;
    }
    return "{$this->titolo}(<i>{$this->titolo_originale}</i>)";
  }

  private function sameTitle()
  {
    if ($this->titolo == $this->titolo_originale) {
      return true;
    }
    return false;
  }

  public function adultsOnly()
  {
    if ($this->eta_minima >= 18) {
      return true;
    }
    return false;
  }
}
