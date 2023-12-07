<?php

class Time {
    private $nome;
    private $anoFundacao;
    private $jogadores = [];

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAnoFundacao($anoFundacao) {
        $this->anoFundacao = $anoFundacao;
    }

    public function addJogador(Jogador $jogador) {
        $this->jogadores[] = $jogador;
    }

    public function getJogadores() {
        return $this->jogadores;
    }
}

?>
