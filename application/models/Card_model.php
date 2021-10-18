
 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Card_model extends CI_Model
    {

        public function getProducts()
        {
            $resultados = $this->db->get("products");
            return $resultados->result();
        }
        public function save($data){
            return $this->db->insert("products",$data);
        }
        public function product($id){
            $this->db->where("id",$id);
            $resultado = $this->db->get("products"); 
            return $resultado->row();
        
        }
        public function remove($id){
            return $query = $this->db->query("Delete from products WHERE id=".$id); 
           }
           
        
    }
    
    ?>