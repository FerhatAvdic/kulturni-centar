<?php
class Reservations_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    
     public function get_reservations()
    {
            $query = $this->db->get('reservations');
            return $query->result_array();
    }
    
    public function reservation_by_id($id=0){
        $query = $this->db->get_where('shows', array('id' => $id));
        return $query->row_array();
    }
    
    public function get_shows_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('shows');
            return $query->result_array();
        }

        $query = $this->db->get_where('shows', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_reservations($id = 0)
    {
        $this->load->helper('url');
        $this->load->helper('form');
 
        //$slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'show' => $this->input->post('show'),
            'date' => $this->input->post('date'),
            'seats' => $this->input->post('seats'),
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'phone' => $this->input->post('phone'),
        );
        
        if ($id == 0) {
            return $this->db->insert('reservations', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('reservations', $data);
        }
    }
    
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('reservations');
    }
}
