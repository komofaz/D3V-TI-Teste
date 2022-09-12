<?php
    require_once('./models/ContatoModel.php');

    class ContatoController{

        public function __construct(){
            $this->model = new ContatoModel();
        }

        public function cadastrar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $row = $this->model->busca_cli();
            require_once('./views/ContatoCadastro.php');
        }

        public function salvar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $this->model->nome = $_POST['contato_nome'];
            $this->model->tel_1 = $_POST['contato_tel_1'];
            $this->model->tel_2 = $_POST['contato_tel_2'];
            $this->model->cel = $_POST['contato_cel'];
            $this->model->email = $_POST['contato_email'];

            if($this->model->salvar()){               
                header("Refresh:0; url='/cliente/editar?cod_cliente=".$this->model->cod_cliente."'");
            } else {
                header("Refresh:0; url='/error'");
            }
        }
        
        public function editar(){ 
            $this->model->cod_contato = $_GET['cod_contato'];
            $row = $this->model->busca_con();
            require_once('./views/ContatoEditar.php');
        }

        public function atualizar(){
            $this->model->cod_cliente = $_GET['cod_cliente'];
            $this->model->cod_contato = $_POST['cod_contato'];
            $this->model->nome = $_POST['nome_contato'];
            $this->model->tel_1 = $_POST['telefone_1'];
            $this->model->tel_2 = $_POST['telefone_2'];
            $this->model->cel = $_POST['celular'];
            $this->model->email = $_POST['email'];

            if($this->model->atualizar()){
                header("Refresh:0; url='/cliente/editar?cod_cliente=".$this->model->cod_cliente);
            } else {
                header("Refresh:0; url='/error'");
            }
        }

        public function excluir(){
            $this->model->cod_contato = $_GET['cod_contato'];
            $row = $this->model->busca_con();
            require_once('./views/ContatoExcluir.php');
        }

        public function deletar(){
            $this->model->cod_contato = $_GET['cod_contato'];
            $this->model->cod_cliente = $_GET['cod_cliente'];

            if($this->model->deletar()){                
                header("Refresh:0; url='/cliente/editar?cod_cliente=".$this->model->cod_cliente);
            } else {
                header("Refresh:0; url='/error'");
            }
        }


    }