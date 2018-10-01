<?php
class Cadastro extends CI_Controller{
    public function index(){
        $this->load->view('cadastro');
    }

    public function gravar(){

        print_r($_POST);
        die();
        $this->load->model('Home_Model');
       if(!empty($_POST)){
            if($this->Home_Model->insert_home()){

                echo "Cadastro feito com sucesso!";

            }

            else{
                echo "Erro de cadastro";
            }
        }

        else{
            echo "Campos vazios";
        }
    }
}


?>