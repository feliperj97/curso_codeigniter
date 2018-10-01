<?php

class Home_Model extends CI_Model{

    public function get_home(){

        return $this->db->get('tb_home')->result();
    }

    public function insert_home(Array $dados){
        if(!empty($dados)){
            return $this->db->insert();
        }
        else{
            return false;
        }
    }

}

?>