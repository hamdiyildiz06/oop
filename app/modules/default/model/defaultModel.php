<?php
class defaultModel extends Model{

    public function indexModel($id){
        $this->db->where('id', $id);
       return $this->db->get("user");
    }
}