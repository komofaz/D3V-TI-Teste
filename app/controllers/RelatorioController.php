<?php
    require_once('./models/RelatorioModel.php');

    class RelatorioController{

        public function __construct(){
            $this->model = new RelatorioModel();
        }

        public function index(){
            $rows = $this->model->listar();
            require_once('./views/Relatorio.php');
        }
    }