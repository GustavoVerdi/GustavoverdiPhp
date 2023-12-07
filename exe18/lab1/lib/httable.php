<?php
require_once 'htel.php';

class htmlTable extends htel {
    private $numColunas;
    private $numLinhas;
    private $dados;

    public function __construct() {
        $this->setStyle('border-style: dashed; border-color: blue;');
    }

    public function setDados($aDados) {
        $this->dados = $aDados;
        $this->setLinhas(sizeof($this->dados));
        $this->setColunas(sizeof($this->dados[0]));
    }

    public function renderHtml() {
        return '<table ' . $this->getStyle() . '> ' . $this->getLinhas() . '</table>';
    }

    public function getLinhas() {
        $linhas = '';
        for ($ilinhas = 0; $ilinhas < $this->numLinhas; $ilinhas++) {
            $linhas .= '<tr>' . $this->getColunas($ilinhas) . '</tr>';
        }
        return $linhas;
    }

    public function getColunas($iLinha) {
        $colunas = '';
        for ($icols = 0; $icols < $this->numColunas; $icols++) {
            $colunas .= '<td>' . $this->dados[$iLinha][$icols] . '</td>';
        }
        return $colunas;
    }

    public function setColunas($iColunas) {
        $this->numColunas = $iColunas;
    }

    public function setLinhas($iLinhas) {
        $this->numLinhas = $iLinhas;
    }
}
?>
