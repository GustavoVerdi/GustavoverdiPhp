<?php 
    class time {
        private $nome;
        private $anoFundacao;
        private $jogadores = array();

        public function getJogadores() {
            return $this->jogadores;
        }
        public function addJogadores($oJogador) {
            array_push($this->jogadores, $oJogador);
        }
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome; 
        }
        public function getAnoFundacao() {
            return $this->anoFundacao;
        }
        public function setAnoFundacao($anoFundacao){
            $this->anoFundacao = $anoFundacao;
        }
    }

    class jogador {
        private $nome;
        private $posicao;

        public function getNome(){
            return $this->nome;
        }    
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getPosicao() {
            return $this->posicao;
        }
        public function setPosicao($posicao) {
            $this->posicao = $posicao;
        }
    }

    $brasil = new time();
    $brasil->setNome ("Vasco");

    $jogador = new jogador();
    $jogador->setNome ("Gustavo"); 
    $jogador->setPosicao ("Atacante");

    $brasil->addJogadores($jogador); 

    $jogador = new jogador();
    $jogador->setNome ("Vinicius"); 
    $jogador->setPosicao ("Meio");

    $brasil->addJogadores($jogador);
    
    var_dump($brasil); 
?> daniel gay