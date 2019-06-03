<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index()
	{
$titulo='Contact';

$js_custom='<script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
<script src="'.base_url().'assets/js/maps_custom.js"></script>';

		$arrayName = array('titulo' =>$titulo, 'js_custom'=>$js_custom );
		$view = $this->load->view('contacts/contact', '', true);
		$this->get_template($view, $arrayName);
	}
	public function get_template($view, $datos){
		$array = array(
			'header' =>$this->load->view('layouts/header', $datos, true),
			'staticbar' =>$this->load->view('layouts/staticbar', '', true),
			'navbar' =>$this->load->view('layouts/navbar', '', true),
			'banner' =>'',
			'content' =>$view,
			'footer' =>$this->load->view('layouts/footer', '', true),
		);
		$this->load->view('layouts/page', $array);
	}
}
