<?php
class Reservations extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('shows_model');
        $this->load->model('reservations_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['shows'] = $this->shows_model->get_shows();
        $data['showbyID'] = NULL;
        $data['title'] = 'Rezervacije';
        
        
 
        $this->load->view('shows_templates/header', $data);
        $this->load->view('shows/reservations', $data);
        $this->load->view('shows_templates/footer');
    }
 
    public function view($id = NULL)
    {
         $this->load->helper('form');
        $this->load->library('form_validation');
        $data['shows'] = $this->shows_model->get_shows();
        $data['showbyID'] = $this->reservations_model->reservation_by_id($id);
        
         $data['title'] = 'Rezervacije';
 
        $this->form_validation->set_rules('name', 'Ime', 'required');
        $this->form_validation->set_rules('surname', 'Prezime', 'required');
        $this->form_validation->set_rules('phone', 'Telefon', 'required');
        $this->form_validation->set_rules('seats', 'Sjedišta', 'required');
        $this->form_validation->set_rules('date', 'Termin', 'required');
        $this->form_validation->set_rules('show', 'Predstava', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header', $data);
            $this->load->view('shows/reservations', $data);
            $this->load->view('shows_templates/footer');
 
        }
        else
        {
            $this->reservations_model->set_reservations();
            $this->load->view('shows_templates/header', $data);
            $this->load->view('shows/reservation_success');
            $this->load->view('shows/reservations', $data);
            $this->load->view('shows_templates/footer');
        }
    }
    
    public function create($id=0)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['shows'] = $this->shows_model->get_shows();
        if ($id!==0){
            $data['showbyID'] = $this->reservations_model->reservation_by_id($id);
        }
        else{
            $data['showbyID'] = NULL;
        }
            
 
        $this->form_validation->set_rules('name', 'Ime', 'required');
        $this->form_validation->set_rules('surname', 'Prezime', 'required');
        $this->form_validation->set_rules('phone', 'Telefon', 'required');
        $this->form_validation->set_rules('seats', 'Sjedišta', 'required');
        $this->form_validation->set_rules('date', 'Termin', 'required');
        $this->form_validation->set_rules('show', 'Predstava', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header', $data);
            $this->load->view('shows/reservations', $data);
            $this->load->view('shows_templates/footer');
 
        }
        else
        {
            $this->reservations_model->set_reservations();
            $this->load->view('shows_templates/header', $data);
            $this->load->view('shows/reservation_success');
            $this->load->view('shows/reservations', $data);
            $this->load->view('shows_templates/footer');
        }
    }
    
    public function edit()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Edit a news item';        
        $data['news_item'] = $this->news_model->get_news_by_id($id);
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('templates/footer');
 
        }
        else
        {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'index.php/news');
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $reservation = $this->reservations_model->reservation_by_id($id);
        
        $this->reservations_model->delete($id);        
        redirect( base_url() . 'index.php/adminboard');        
    }
}
