
 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('shows_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['shows'] = $this->shows_model->get_home_shows();
 
        $this->load->view('shows_templates/header', $data);
        $this->load->view('shows/index', $data);
        $this->load->view('shows_templates/footer');
    }
}