<?php
    require_once('./models/ContatoModel.php');

    class ContatoController{

        public function __construct(){
            $this->model = new ContatoModel();
        }

        public function cadastrar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $row = $this->model->busca_cod();
            require_once('./views/ContatoCadastro.php');
        }

        public function salvar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];            
            $this->model->salvar();
        }
        
        public function editar(){
            require_once('./views/ContatoEditar.php');
        }

        public function atualizar(){

        }

        public function excluir(){
            require_once('./views/ContatoExcluir.php');
        }
        public function deletar(){

        }


    }