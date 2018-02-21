<?php
class Admin extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('shows_model');
        $this->load->model('reservations_model');
        $this->load->model('contact_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['shows'] = $this->shows_model->get_shows();
        $data['show_pictures'] =$this->shows_model->get_show_pictures();
        $data['messages'] = $this->contact_model->get_messages();
        $data['reservations'] = $this->reservations_model->get_reservations();
        
 
        $this->load->view('shows_templates/header');
        $this->load->view('shows/adminboard', $data);
    }
}
