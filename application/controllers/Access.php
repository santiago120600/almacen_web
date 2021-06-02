<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Access extends MY_RootController {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->_check_session();
		$this->load->view('access_page');
	}
  function doLogin(){
      
  }
	public function logout(){
		$this->session->unset_userdata('almacen_sw14_sess');
    redirect('access','refresh');
	}

	public function _check_session(){
			$session = $this->session->userdata('almacen_sw14_sess');
			if (@$session['sess_email'] && !$this->input->is_ajax_request() ) {
					redirect ( 'home' );
			}
	}
}
