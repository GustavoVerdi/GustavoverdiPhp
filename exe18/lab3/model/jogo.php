<?php

require_once 'time.php';

class Jogo {
    private $timeA;
    private $timeB;
    private $gols = [];

    public function setTimeA(Time $time) {
        $this->timeA = $time;
    }

    public function setTimeB(Time $time) {
        $this->timeB = $time;
    }

    public function addGol(Gol $gol) {
        $this->gols[] = $gol;
    }

    public function getNomeTimeVencedor() {
        $golsTimeA = count(array_filter($this->gols, function ($gol) {
            return $gol->getTime() === $this->timeA;
        }));
    
        $golsTimeB = count(array_filter($this->gols, function ($gol) {
            return $gol->getTime() === $this->timeB;
        }));
    
        if ($golsTimeA > $golsTimeB) {
            return $this->timeA->getNome();
        } elseif ($golsTimeB > $golsTimeA) {
            return $this->timeB->getNome();
        } else {
            return "Empate";
        }
    }
    
}

?>
