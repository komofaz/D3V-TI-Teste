<?php
    require_once('./models/ClienteModel.php');

    class ClienteController{

        function __construct(){
            $this->model = new ClienteModel();            
        }

        // Lista os Clientes
        public function index(){
            $rows = $this->model->listar();
            require_once('./views/ClienteList.php');
        }

        // Abre formulário de cadastro
        public function cadastrar(){
            require_once('./views/ClienteCadastro.php');
        }

        // Salva os dados do cadastro no banco de dados
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
                    $this->model->ultimo_id();
                    // Pega o cadastro e abre a edição, se quiser cadastrar contatos
                    header("Refresh:0; url='/cliente/editar?cod_cliente=".$this->model->cod_cliente."'");
                } else {
                    header("Refresh:0; url='/error'");
                }
            } else {
                header("Refresh:0; url='/error'");
            }          
        }

        // Abre o formulário de edição do Cliente
        public function editar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $row = $this->model->busca_cod();
            require_once('./views/ClienteEditar.php');            
        }

        // Atualiza os dados do Cliente no Banco de Dados
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

                
                if($this->model->atualizar()){
                    header("Refresh:0; url='/");
                } else {
                    header("Refresh:0; url='/error'");
                }

            } else {
                header("Refresh:0; url='/error'");
            } 
        }

        // Abre o Aviso de Exclusão
        public function excluir(){
            // Verificar Aqui se Tem contato ou não
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $row = $this->model->busca_cod();
            require_once('./views/ClienteExcluir.php');
        }

        // Deleta Cliente no banco de dados
        public function deletar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];

            if($this->model->deletar()){
                header("Refresh:0; url='/");
            } else {
                header("Refresh:0; url='/error'");
            }
        }
        
        // Tela de erro padrão
        public function error(){
            require_once('./views/Error.php');
        }
    }