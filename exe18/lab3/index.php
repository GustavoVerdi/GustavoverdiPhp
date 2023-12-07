<?php

require_once 'model/time.php';
require_once 'model/jogo.php';
require_once 'model/gol.php';
require_once 'model/jogador.php';

//1 - Definir os times
//1.1 - Criar uma instância do time 1
$oTime1 = new Time();
$oTime1->setNome("Brasil");
$oTime1->setAnoFundacao("1500");

//1.2 - Criar uma instância do time 1
$oTime2 = new Time();
$oTime2->setNome("Argentina");
$oTime2->setAnoFundacao("1900");

//2 - Definir os jogadores
$oJogador1 = new Jogador();
$oJogador1->setNome("João");
$oJogador1->setPosicao("Goleiro");

// Adicionar esse jogador ao time 1
$oTime1->addJogador($oJogador1);

// Criar instâncias dos jogadores para o time1
for ($i = 1; $i <= 11; $i++) {
    $jogador = new Jogador();
    $jogador->setNome("Jogador" . $i);
    $jogador->setPosicao("Atacante");
    $oTime1->addJogador($jogador);
}

// Criar instâncias dos jogadores para o time2
for ($i = 1; $i <= 11; $i++) {
    $jogador = new Jogador();
    $jogador->setNome("Jogador" . $i);
    $jogador->setPosicao("Defensor");
    $oTime2->addJogador($jogador);
}


//3 - Criar o Jogo
$oJogo = new Jogo();
$oJogo->setTimeA($oTime1);
$oJogo->setTimeB($oTime2);

//4 - Assinalar GOLs
// Assinalar Gols para o Time 1 (exemplo)
for ($i = 1; $i <= 11; $i++) {
    $oGol = new Gol();
    $oGol->setTempo(10);
    $oGol->setJogador($oTime1->getJogadores()[$i - 1]);
    $oGol->setTime($oTime1);
    $oJogo->addGol($oGol);
}

// Identificar qual foi o time vencedor
echo "Time Vencedor: " . $oJogo->getNomeTimeVencedor();

?>
