<?php
namespace app\model;

require_once "endereco.php";
require_once "contato.php";
class pessoa {
    private $nome;
    private $sobreNome;
    private $dataNascimento;
    private $cpfCnpj;
    //Tipo 1 - Física, 2 - Jurídica
    private $tipo;

    private $telefone;
    private $endereco;


    public function __construct() {
        $this->inicializaClasse();
      }


      public function toJson() {
        $data = [
            'nome' => $this->nome,
            'sobreNome' => $this->sobreNome,
            'dataNascimento' => $this->dataNascimento->format('Y-m-d'),
            'telefone' => $this->telefone->toJson(),
            'endereco' => $this->endereco->toJson()
        ];
        return json_encode($data);
    }
    

      private function inicializaClasse() {
        $this->tipo = 1;
        $this->telefone = new \app\model\contato;
        $this->endereco = new \app\model\endereco;
      }

        public function getDataNascimento() {
            return $this->dataNascimento;
          }
  
          public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
          }
  
          public function getNomeCompleto() {
            return $this->nome . " " . $this->sobreNome;
          } 
  
          public function getIdade() {
            if(isset($this->dataNascimento)) {

              $idade = $this->dataNascimento->diff( new \DateTime( date('Y-m-d') ) );
              return $idade->y; 
            }
            return false;
          }
  
          public function getTelefone() {
            return $this->telefone;
          }
  
          public function getEndereco() {
            return $this->endereco;
          }
  
          public function getNome()
          {
                  return $this->nome;
          }
  
          public function setNome($nome)
          {
                  $this->nome = $nome;
          }
  
          public function getSobreNome()
          {
              return $this->sobreNome;
          }
  
          public function setSobreNome($sobreNome)
          {
              $this->sobreNome = $sobreNome;
          }
      }
  ?>