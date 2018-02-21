<?php
class Contact extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
 
        $this->form_validation->set_rules('name', 'Ime', 'required');
        $this->form_validation->set_rules('phone', 'Telefon', 'required');
        $this->form_validation->set_rules('body', 'Tekst', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header');
            $this->load->view('shows/contact');
            $this->load->view('shows_templates/footer');
 
        }
        else
        {
            $this->contact_model->set_message();
            $this->load->view('shows_templates/header');
            $this->load->view('shows/contact');
            $this->load->view('shows_templates/footer');
        }
        
    }
    
    public function delete()
    {
         $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $message = $this->contact_model->get_message_by_id($id);
        
        $this->contact_model->delete($id);        
        redirect( base_url() . 'index.php/adminboard');  
    }
 
    
}
