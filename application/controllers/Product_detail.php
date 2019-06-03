<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_detail extends CI_Controller {
	public function index()
	{
		$titulo='Product detail';
		$js_custom='';
		$arrayName = array('titulo' =>$titulo, 'js_custom'=>$js_custom );
		$view = $this->load->view('details/product_detail', '', true);
		$this->get_template($view, $arrayName);
	}
	public function get_template($view, $datos){
		$array = array(
			'header' =>$this->load->view('layouts/header', $datos, true),
			'staticbar' =>'',
			'navbar' =>$this->load->view('layouts/navbar', '', true),
			'banner' =>'',
			'content' =>$view,
			'footer' =>$this->load->view('layouts/footer', '', true),
		);
		$this->load->view('layouts/page', $array);
	}
}
