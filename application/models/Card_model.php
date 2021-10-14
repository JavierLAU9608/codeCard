
 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Card_model extends CI_Model
    {

        public function getProducts()
        {
            $resultados = $this->db->get("products");
            return $resultados->result();
        }
    }
    ?>