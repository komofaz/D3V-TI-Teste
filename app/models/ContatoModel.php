<?php
    require_once('./config/Connect.php');

    class ContatoModel extends Connect{

        public $cod_cliente;
        public $cod_contato;
        public $nome, $tel_1, $tel_2, $cel, $email;

        public function __construct(){
            parent::__construct();
        }

        public function busca_cli(){
            $row = $this->connection->query('SELECT * FROM Cliente Where cod_cliente = '.$this->cod_cliente.';');
            return mysqli_fetch_array($row);
        }

        public function busca_con(){
            $row = $this->connection->query('SELECT * FROM Contato Where cod_contato = '.$this->cod_contato.';');
            return mysqli_fetch_array($row);
        }

        public function salvar(){
            $rows = $this->connection->query(
                'INSERT INTO Contato(cod_cliente,nome_contato,telefone_1,telefone_2,celular,email)
                VALUES ('.$this->cod_cliente.',"'.$this->nome.'","'.$this->tel_1.'","'.$this->tel_2.'","'.$this->cel.'","'.$this->email.'");'
            );
            return $rows;
        }

        public function atualizar(){
            $rows = $this->connection->query(
                'UPDATE Contato SET nome_contato="'.$this->nome.'",telefone_1="'.$this->tel_1.'",telefone_2="'.$this->tel_2.'",celular="'.$this->cel.'",email="'.$this->email.'" WHERE cod_contato ='.$this->cod_contato.';'
            );
            return $rows;
        }

        public function deletar(){
            $rows = $this->connection->query(
                'DELETE FROM Contato WHERE cod_contato ='.$this->cod_contato.';' 
            );
            return $rows;
        }

    }