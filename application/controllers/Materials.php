<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends MY_RootController {
	function __construct(){
		parent::__construct();
		$this->_isAuth();
	}

	public function index(){
		$params_includes['head'] = array("title" => "Materials");
		$params_includes['nav'] = array("modulo" => "Materials");
		$params_includes['menu'] = array("selected" => "Materials");
		$this->_load_page('Materials/materials_page',array(),$params_includes);
        $this->load->view('Materials/materials_js');
	}

    public function materials_form(){
		if($this->input->is_ajax_request()){
			echo $this->load->view('Materials/materials_form',null,TRUE);
		}else{
			redirect('home');
		}
    }
}

