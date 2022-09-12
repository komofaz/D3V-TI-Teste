<?php
    require_once('./config/Connect.php');

    class RelatorioModel extends Connect{

        public function __construct(){
            parent::__construct();
        }

        public function listar(){
            $s_con = $this->sem_contatos();
            $s_tel = $this->sem_telefone();
            $s_cel = $this->sem_celular();
            $s_email = $this->sem_email();
            $rows[0] = $s_con;
            $rows[1] = $s_tel;
            $rows[2] = $s_cel;
            $rows[3] = $s_email;
            
            // foreach($rows[0] as $row){
            //     echo $row['cod_cliente'];
            // }

            return $rows;            
        }

        protected function sem_contatos(){
            $s_con =$this->connection->query(
                'SELECT * FROM cliente cli WHERE NOT EXISTS (SELECT * FRom contato con WHERE con.cod_cliente = cli.cod_cliente)'
            );
            return $s_con;
        }

        protected function sem_telefone(){
            $s_tel =$this->connection->query(
                'SELECT * FROM cliente cli WHERE NOT EXISTS (SELECT * FRom contato con WHERE con.telefone_1 IS NULL AND con.telefone_2 IS NULL)'
            );
            return $s_tel;
        }

        protected function sem_celular(){
            $s_cel =$this->connection->query(
                'SELECT * FROM cliente cli WHERE NOT EXISTS (SELECT * FRom contato con WHERE con.celular IS NULL)'
            );
            return $s_cel;
        }

        protected function sem_email(){
            $s_email =$this->connection->query(
                'SELECT * FROM cliente cli WHERE NOT EXISTS (SELECT * FRom contato con WHERE con.email IS NULL)'
            );
            return $s_email;
        }
    }