<?php
    namespace app\model;

    class endereco{
        private $Logradouro;
        private $Bairro;
        private $Cidade;
        private $Estado;
        private $cep;
    
        public function setLogradouro($logradouro) {
            $this->Logradouro = $logradouro;
        }
    
        public function setBairro($bairro) {
            $this->Bairro = $bairro;
        }
    
        public function setCidade($cidade) {
            $this->Cidade = $cidade;
        }
    
        public function setEstado($estado) {
            $this->Estado = $estado;
        }
    
        public function setCEP($cep) {
            $this->cep = $cep;
        }
    
        public function getLogradouro() {
            return $this->Logradouro;
        }
    
        public function getBairro() {
            return $this->Bairro;
        }
    
        public function getCidade() {
            return $this->Cidade;
        }
    
        public function getEstado() {
            return $this->Estado;
        }
    
        public function getCEP() {
            return $this->cep;
        }
    
        public function toJson() {
            $data = [
                'Logradouro' => $this->Logradouro,
                'Bairro' => $this->Bairro,
                'Cidade' => $this->Cidade,
                'Estado' => $this->Estado,
                'CEP' => $this->cep
            ];
            return json_encode($data);
        }
    }
    
?>