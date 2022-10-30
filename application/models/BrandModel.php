<?php

    class BrandModel extends CI_Model{

        public function insertBrand($data){
            return $this->db->insert('brands',$data);
        }

    }

?>