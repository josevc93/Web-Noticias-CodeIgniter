<?php


class Pages extends CI_Controller {

	public function view($page = 'about')
	{
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                if($page == 'about')
                        $data['title'] = 'Sobre nosotros'; 
                else if($page == 'home')     
                        $data['title'] = 'Inicio'; 


                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
	}
}