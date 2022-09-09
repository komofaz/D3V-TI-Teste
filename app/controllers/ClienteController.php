<?php
    require_once('./models/ClienteModel.php');

    class ClienteController{

        function __construct(){
            $this->model = new ClienteModel();            
        }

        public function index(){
            $rows = $this->model->listar();
            require_once('./views/ClienteList.php');
        }

        public function editar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $row = $this->model->editar();
            require_once('./views/ClienteEditar.php');            
        }

        public function atualizar(){
            $this->model->cod_cliente = $_POST['cod_cliente'];
            
            if (!empty($_POST['razao_social']) and !empty($_POST['nome_fantasia'])){
               
                $this->model->razao_social = $_POST['razao_social'];
                $this->model->nome_fantasia = $_POST['nome_fantasia'];
                $this->model->endereco = $_POST['endereco'];
                $this->model->complemento = $_POST['complemento'];
                $this->model->bairro = $_POST['bairro'];
                $this->model->cidade = $_POST['cidade'];
                $this->model->estado = $_POST['estado'];
                $this->model->data_inclusao = date('Y-m-d');

                $this->model->atualizar();

            } else {
                echo 'Erro: Campos Obrigatórios estão vazios..';
            } 
        }

        public function deletar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            require_once('./views/ClienteExcluir.php');
        }

        public function cadastrar(){
            require_once('./views/ClienteCadastro.php');
        }

        public function salvar(){
            //Verificar se os campos obrigatórios não estão vazios
            if (!empty($_POST['razao_social']) and !empty($_POST['nome_fantasia'])){
               
                $this->model->razao_social = $_POST['razao_social'];
                $this->model->nome_fantasia = $_POST['nome_fantasia'];
                $this->model->endereco = $_POST['endereco'];
                $this->model->complemento = $_POST['complemento'];
                $this->model->bairro = $_POST['bairro'];
                $this->model->cidade = $_POST['cidade'];
                $this->model->estado = $_POST['estado'];
                $this->model->data_inclusao = date('Y-m-d');

                if($this->model->salvar()){
                    //carregar tela editar do cliente
                    echo 'sucesso';
                } else {
                    //tela de erro
                    echo 'fracasso';
                }
            } else {
                echo 'Erro: Campos Obrigatórios estão vazios..';
            }           

            
        }
    }