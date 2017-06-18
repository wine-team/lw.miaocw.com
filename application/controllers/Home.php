<?php
class Home extends MW_Controller{
	
	public function _init() {
		
	}
	
	public function index() {
		
		$this->load->view('home/index');
	}
}