<?php

    class Application
    {
        public function executar(){
            $url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
            $url = ucfirst($url);
            $url.="Controller";
            if(file_exists('Controllers/'.$url.'.php')){
                $className = 'Controllers\\'.$url;
                $controller = new $className;
                $controller->executar();
            }else{
                die("Não existe esse controlador!");
            }
        }
    }

?>