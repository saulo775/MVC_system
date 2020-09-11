<?php

    namespace Controllers;

use Router;

class ContatoController extends Controller
    {

        public function __construct(){
        }

        public function executar(){
            if(isset($_POST['acao'])){
                \Models\ContatoModel::enviarFormulario();
                echo '<script>location.href="'.INCLUDE_PATH.'contato/sucesso"</script>';
                die();
            }

            \Router::rota('contato', function(){
                $this->view->render(array('titulo'=>'contato-sucesso'));
                $this->view = new \Views\MainView('Contato');

            });

            \Router::rota('contato', function(){
                $this->view->render(array('titulo'=>'contato'));
                $this->view = new \Views\MainView('Contato');

            });
        }
    }
?>
