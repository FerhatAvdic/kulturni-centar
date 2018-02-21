<?php
class Shows_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_shows($slug = FALSE)
    {
        if ($slug === FALSE)
        {
            $query = $this->db->get('shows');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('shows', array('slug' => $slug));
        return $query->row_array();
    }
    
    public function get_pictures_by_show_id($showid){
        $query = $this->db->get_where('show_pictures', array('showid' => $showid));
        return $query->result_array();
    }
    
    public function get_show_pictures(){
            $query = $this->db->get('show_pictures');
            return $query->result_array();
    }
    
    public function get_home_shows(){
        $this->db->select('id');
        $this->db->select('title');
        $this->db->select('picture');
        $this->db->from('shows');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result_array();
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
    
    public function set_shows($id = 0)
    {
        $this->load->helper('url');
 
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
 
        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'description' => $this->input->post('description'),
            'picture' => $this->input->post('picture'),
            'price' => $this->input->post('price')
        );
        
        if ($id == 0) {
            return $this->db->insert('shows', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('shows', $data);
        }
    }
    
    public function set_pictures($id = 0)
    {
        $data = array(
            'showid' => $this->input->post('showid'),
            'link' => $this->input->post('link')
        );
        
        if ($id == 0) {
            return $this->db->insert('show_pictures', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('show_pictures', $data);
        }
    }
    
     public function delete_show($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('shows');
    }
    
    public function delete_show_pictures($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('show_pictures');
    }
}
