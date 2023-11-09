<?php
    namespace app\model;

    class contato {
        private $tipo;
        private $nome;
        private $valor;
    
        public function getTipo()
        {
            return $this->tipo;
        }
    
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }
    
        public function getNome()
        {
            return $this->nome;
        }
    
        public function setNome($nome)
        {
            $this->nome = $nome;
        }
    
        public function getValor()
        {
            return $this->valor;
        }
    
        public function setValor($valor)
        {
            $this->valor = $valor;
        }
    
        public function toJson() {
            $data = [
                'tipo' => $this->tipo,
                'nome' => $this->nome,
                'valor' => $this->valor
            ];
            return json_encode($data);
        }
    }
    
    
?>
