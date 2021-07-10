<?php
class defaultModel extends Model{

    public function indexModel(){
       return $this->db->get("user");
    }
}