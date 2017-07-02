<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'Noticias';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {   
            $titleGet = $this->input->get('title'); //buscador
            $data['news_item'] = $this->news_model->get_news($titleGet);

            /*Si encuentra lo que se le pasa por el buscador, asigna el titulo*/
            if(!empty($data['news_item'])){
                $data['title'] = $titleGet;
            }else{ //Comprueba si se ha accedido desde /news y asigna ese titulo
                $data['news_item'] = $this->news_model->get_news($slug); 
                if(!empty($data['news_item'])){
                    $data['title'] = $data['news_item']['title'];
                }
            }     

            //error
            if(empty($data['title']))
                $data['title'] = "Error";   

            $this->load->view('templates/header', $data);
            $this->load->view('news/view', $data);
            $this->load->view('templates/footer');
        }

        public function delete($id)
        {
            $this->news_model->delete_new($id);
            
            $data['news'] = $this->news_model->get_news();
            $data['title'] = 'Noticias';

            $this->load->view('templates/header', $data);
            $this->load->view('news/index', $data);
            $this->load->view('templates/footer');  
        }

        public function create()
        {
            $this->load->helper('form');
            $this->load->library('form_validation');

            $data['title'] = 'Nueva noticia';

            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('text', 'Text', 'required');

            if ($this->form_validation->run() === FALSE)
                $data['success'] = '';
            else
            {
                $this->news_model->set_news();
                $data['success'] = 'Se ha creado correctamente.';
            }
             
            $this->load->view('templates/header', $data);
            $this->load->view('news/create', $data);
            $this->load->view('templates/footer');
        }
}