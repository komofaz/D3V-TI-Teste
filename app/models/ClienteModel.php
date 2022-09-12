<?php
    require_once('./config/Connect.php');

    class ClienteModel extends Connect{        

        public $razao_social,$nome_fantasia,$endereco,$complemento,$bairro,$cidade,$estado,$data_inclusao; 
        public $cod_cliente;

        public function __construct(){
            parent::__construct();
        }

        public function busca_cod(){
            $rows = $this->connection->query('SELECT * FROM Cliente WHERE cod_cliente = '.$this->cod_cliente.' LIMIT 1;');
            return mysqli_fetch_array($rows); 
        }

        public function ultimo_id(){
            $this->cod_cliente = mysqli_insert_id($this->connection);                        
        }

        public function listar(){
            $rows = $this->connection->query(
                'SELECT cliente.*,COUNT(contato.cod_cliente) as contatos FROM cliente LEFT JOIN contato ON cliente.cod_cliente=contato.cod_cliente GROUP BY cliente.cod_cliente;'
            );
            return $rows;       
        }  
        
        public function listar_contatos(){
            $rows = $this->connection->query(
                'SELECT * FROM contato WHERE cod_cliente ='.$this->cod_cliente.';'
            );
            return $rows;
        }

        public function atualizar(){
            $rows = $this->connection->query('UPDATE Cliente SET razao_social="'.$this->razao_social.'",nome_fantasia="'.$this->nome_fantasia.'",
                                                endereco="'.$this->endereco.'",complemento="'.$this->complemento.'",bairro="'.$this->bairro.'",
                                                cidade="'.$this->cidade.'",estado="'.$this->estado.'" WHERE cod_cliente ='.$this->cod_cliente.';');
            return $rows;
        }
        
        public function salvar(){
            $rows = $this->connection->query(
                'INSERT INTO CLiente(razao_social,nome_fantasia,endereco,complemento,bairro,cidade,estado,data_inclusao) 
                 VALUES ("'.$this->razao_social.'","'.$this->nome_fantasia.'","'.$this->endereco.'","'.$this->complemento.'",
                         "'.$this->bairro.'","'.$this->cidade.'","'.$this->estado.'","'.$this->data_inclusao.'");'
            ); 
            return $rows;
        }        

        public function deletar(){
            $row = $this->connection->query('DELETE FROM Cliente WHERE cod_cliente ='.$this->cod_cliente.';');                        
            return $row;
        }
        
    }