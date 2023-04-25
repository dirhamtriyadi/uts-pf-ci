<?php
class Home extends CI_Controller {
	
	public function index() {
		$this->load->model('product_model');
		$data['product'] = $this->product_model->total();
		$this->load->view('admin/home', $data);
	}
}
