<?php
    require_once('./config/Connect.php');

    class ContatoModel extends Connect{

        public $cod_cliente;

        public function __construct(){
            parent::__construct();
        }

        public function busca_cod(){
            $row = $this->connection->query('SELECT * FROM Cliente Where cod_cliente = '.$this->cod_cliente.';');
            return mysqli_fetch_array($row);
        }

        public function salvar(){
            echo 'salvar contato model';
        }

        public function atualizar(){
            echo 'atualizar contato model';
        }

        public function deletar(){
            echo 'deletar contato model';
        }

    }