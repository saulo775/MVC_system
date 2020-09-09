<?php

    namespace Controllers;
    class ContatoController extends Controller
    {

        public function __construct(){
            $this->view = new \Views\ContatoView('contato');
        }

        public function executar(){
            $this->view->render();
        }
    }
?>
