<?php
class Cadastro extends CI_Controller{
    public function index(){

        $this->load->model('Home_Model');

        $dados['get_home'] = $this->Home_Model->get_home();
        $this->load->view('cadastro', $dados);
    }

    public function gravar(){


        $this->load->model('Home_Model');
       if(!empty($_POST)){
            if($this->Home_Model->insert_home($_POST)){

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

    public function editar($id){

        $this->load->model('Home_Model');
        if(isset($id)){

            $dados['form'] = $this->Home_Model->update_home($id);
            $this->load->view('cadastro', $dados);
        }

        else{
            echo "sem id";
        }
    }
}


?>