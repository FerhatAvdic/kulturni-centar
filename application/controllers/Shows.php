<?php
class Shows extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('shows_model');
        $this->load->helper('url_helper');
    }
 
    public function index()
    {
        $data['shows'] = $this->shows_model->get_shows();
        $data['title'] = 'Predstave';
 
        $this->load->view('shows_templates/header', $data);
        $this->load->view('shows/shows', $data);
        $this->load->view('shows_templates/footer');
    }
 
    public function view($slug = NULL)
    {
        $data['shows_item'] = $this->shows_model->get_shows($slug);
        $show_id = $data['shows_item']['id'];
        $data['show_pictures'] = $this->shows_model->get_pictures_by_show_id($show_id);
        if (empty($data['shows_item']))
        {
            show_404();
        }
 
        $data['title'] = $data['shows_item']['title'];
        $this->load->view('shows_templates/header', $data);
        $this->load->view('shows/show_item', $data);
        $this->load->view('shows_templates/footer');
    }
    
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
 
 
        $this->form_validation->set_rules('title', 'Naziv', 'required');
        $this->form_validation->set_rules('description', 'Opis', 'required');
        $this->form_validation->set_rules('picture', 'Link Slike', 'required');
        $this->form_validation->set_rules('price', 'Cijena', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header');
            $this->load->view('shows/show_create');
 
        }
        else
        {
            $this->shows_model->set_shows();
            $this->load->view('shows_templates/header');
            $this->load->view('shows/show_create');
        }
    }
    
    public function addpicture($id=NULL)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['shows'] = $this->shows_model->get_shows();
        if ($id!==0){
            $data['showbyID'] = $this->shows_model->get_shows_by_id($id);
        }
        else{
            $data['showbyID'] = NULL;
        }
 
        $this->form_validation->set_rules('showid', 'ID Predstave', 'required');
        $this->form_validation->set_rules('link', 'Link Slike', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header');
            $this->load->view('shows/add_picture', $data);
 
        }
        else
        {
            $this->shows_model->set_pictures();
            $this->load->view('shows_templates/header');
            $this->load->view('shows/add_picture', $data);
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
            
        $data['shows_item'] = $this->shows_model->get_shows_by_id($id);
        
        $this->form_validation->set_rules('title', 'Naziv', 'required');
        $this->form_validation->set_rules('description', 'Opis', 'required');
        $this->form_validation->set_rules('picture', 'Link Slike', 'required');
        $this->form_validation->set_rules('price', 'Cijena', 'required');
 
         if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('shows_templates/header');
            $this->load->view('shows/show_edit', $data);
 
        }
        else
        {
            $this->shows_model->set_shows($id);
            redirect( base_url() . 'index.php/adminboard');   
        }
    }
    
    public function delete()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $shows_item = $this->shows_model->get_shows_by_id($id);
        
        $this->shows_model->delete_show($id);        
        redirect( base_url() . 'index.php/adminboard');        
    }
    
    public function deletepicture()
    {
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
                
        $shows_item = $this->shows_model->get_shows_by_id($id);
        
        $this->shows_model->delete_show_pictures($id);        
        redirect( base_url() . 'index.php/adminboard');        
    }
}
