<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$datos['lista_de_tareas'] = array('Limpiar la Casa', 'Llamar a Mamá', 'Hacer un Recado');
		$datos['titulo'] = "Mi Título Real";
		$datos['encabezado'] = "My Encabezado Real";

		$this->load->view('blog/vistablog', $datos);
	}
	public function nueva()
	{
		echo 'Nueva funcion';
	}
	public function shoes($sandals, $id)
	{
		echo $sandals . " ";
		echo $id;
	}

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */