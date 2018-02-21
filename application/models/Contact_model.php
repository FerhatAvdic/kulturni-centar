<?php
class Contact_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_messages()
    {
            $query = $this->db->get('messages');
            return $query->result_array();
    }
    
    public function get_message_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('messages');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('messages', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_message($id = 0)
    {
        $now = new DateTime ( NULL, new DateTimeZone('UTC'));
 
        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'body' => $this->input->post('body'),
            'timestamp' => date_format($now, 'Y-m-d H-i-s')
        );
        
        if ($id == 0) {
            return $this->db->insert('messages', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('messages', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('messages');
    }
}
