<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error_404 extends CI_Controller {
	public function index()
	{
$titulo='Error 404';
		$arrayName = array('titulo' =>$titulo );
		$view = $this->load->view('errors/html/error_404', '', true);
		$this->get_template($view, $arrayName);
	}
	public function get_template($view, $datos){
		$array = array(
			'header' =>$this->load->view('layouts/header', $datos, true),
			'staticbar' =>'',
			'navbar' =>$this->load->view('layouts/navbar', '', true),
			'banner' =>'',
			'content' =>$view,
			'footer' =>'',
		);
		$this->load->view('layouts/page', $array);
	}
}
