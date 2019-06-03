<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	public function index()
	{
		$titulo='Inicio';
		$js_custom='';
		$arrayName = array('titulo' =>$titulo, 'js_custom'=>$js_custom );
		$view = $this->load->view('layouts/content', '', true);
		$this->get_template($view, $arrayName);
	}
	public function get_template($view, $datos){
		$array = array(
			'header' =>$this->load->view('layouts/header', $datos, true),
			'staticbar' =>$this->load->view('layouts/staticbar', '', true),
			'navbar' =>$this->load->view('layouts/navbar', '', true),
			'banner' =>$this->load->view('layouts/banner', '', true),
			'content' =>$view,
			'footer' =>$this->load->view('layouts/footer', '', true),
		);
		$this->load->view('layouts/page', $array);
	}
}
