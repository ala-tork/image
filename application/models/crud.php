<?php 
    class Crud extends CI_Model
    {
        public function insert($data)
        {
            $this->db->insert('utilisateur',$data);
            return true;
        }
        public function get()
        {
            $query = $this->db->query("select * from utilisateur");
            return $query;

        }
        public function get_id($id)
        {
            $this->db->select('*');
            $this->db->from('utilisateur');
            $this->db->like("id",$id);
            $query=$this->db->get();
            return $query;

        }
        public function update($data)
        {
            $this->db->where('id', $data['id']);
            $this->db->update('utilisateur', $data);
            return true;
        }
        public function delete_id($id)
        {
            $this->db->delete('utilisateur', array('id' => $id));
        }
    }
    
?>