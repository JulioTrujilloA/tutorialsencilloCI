<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

	public function ver($value='')
	{

	}

	public function crear($accion = 'formulario')
	{
		switch ($accion) {
			case 'formulario':
				$data['title'] =  'Bienvenido | CodeIgniter 2015';

				$this->load->view('templates/head', $data);
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('noticias/formulario');
				$this->load->view('templates/quick-sidebar');
				$this->load->view('templates/footer');
				break;
			case 'insertar':
				# code...
				break;
			
			default:
				show_404;
				break;
		}
	}
}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */