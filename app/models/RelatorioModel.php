<?php
    require_once('./config/Connect.php');

    class RelatorioModel extends Connect{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){
            $s_con = $this->sem_contatos();
            $s_tel = $this->sem_tel_cel();
            $s_email = $this->sem_email();
            $rows[0] = $s_con;
            $rows[1] = $s_tel;
            $rows[2] = $s_email;

            return $rows;            
        }

        protected function sem_contatos(){
            $s_con =$this->connection->query(
                'SELECT * FROM cliente cli WHERE NOT EXISTS (SELECT * FROM contato con WHERE con.cod_cliente = cli.cod_cliente)'
            );
            return $s_con;
        }

        protected function sem_tel_cel(){
            $s_tel =$this->connection->query(
                "SELECT cli.* FROM cliente cli, contato con WHERE cli.cod_cliente=con.cod_cliente AND (con.telefone_1 = '' AND con.telefone_2 = '' AND con.celular = '') GROUP BY cli.cod_cliente;"
            );
            return $s_tel;
        }

        protected function sem_email(){
            $s_email =$this->connection->query(
                "SELECT cli.* FROM cliente cli, contato con WHERE cli.cod_cliente=con.cod_cliente AND con.email = '' GROUP BY cli.cod_cliente;"
            );
            return $s_email;
        }
    }