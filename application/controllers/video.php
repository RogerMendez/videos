<?php
class Video extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
        $this->load->library('form_validation');
		$this->load->model('video_model');

	}

	function index()
	{
		$data['videos'] = $this->video_model->select_videos();
		$this->load->view('header');
		$this->load->view('video/catalogo', $data);
		$this->load->view('footer');
	}
	function new_video($error = '')
	{
		$data['error'] = $error;
		$this->load->view('header');
		$this->load->view('video/new_video', $data);
		$this->load->view('footer');
	}
	function save()
	{
		$config['upload_path'] = './images/portada/';
		$config['allowed_types'] = 'jpg|JPG|jpeg|JPEG|png|PNG';
		$config['remove_spaces'] = TRUE;
		$config['max_size'] = '1024';
	    
		$this->load->library('upload', $config); 

		$this->form_validation->set_rules('titulo', 'Titulo de Video', 'trim|required|max_length[100]|is_unique[info_video.titulo]');
        $this->form_validation->set_rules('costo', 'Costo de Video', 'trim|required|integer');
        $this->form_validation->set_rules('formato', 'Formato de Video', 'trim|required');

        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('integer', 'El campo %s deve poseer solo numeros enteros');
        $this->form_validation->set_message('is_unique', 'El campo %s ya esta registrado');
        $this->form_validation->set_message('required', 'El campo %s es obligatorio');
        $this->form_validation->set_message('max_length', 'El Campo %s debe tener un Maximo de %d Caracteres');

		if ($this->form_validation->run() == FALSE)
		{
			$this->new_video();
		}
		else
		{
			if ( ! $this->upload->do_upload())
			{
				$error = $this->upload->display_errors();
				$this->new_video($error);
			}
			else
			{
				$data = $this->upload->data();
				$titulo = $this->input->post('titulo');
				$costo = $this->input->post('costo');
				$formato = $this->input->post('formato');
				$portada = $data['file_name'];
				$insert = $this->video_model->insert($titulo, $costo, $formato, $portada);
				if($insert)
				{
					redirect('/video/', 'refresh');
				}
				else
				{
					$this->new_video();
				}
			}
		}
	}
}