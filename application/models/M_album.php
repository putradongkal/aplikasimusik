<?php


class M_album extends CI_Model{
    public function getalbum(){
        return $this->db->get('album')->result();
    }
   
    public function getbyid($id){

          
      
            return $this->db->get_where('sound', ["album_id" => $id])->result();
      
    }
   
}