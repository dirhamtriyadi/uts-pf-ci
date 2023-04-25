<?php
class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');

		// $this->load->helper('form');
        $this->load->library('form_validation');
	}

	public function index() {
		// $this->load->model('product_model');
		$data['products'] = $this->product_model->get();
		$this->load->view('admin/product', $data);
	}

	public function Tambah()
	{
		$this->load->view('admin/product_tambah');
	}

	public function Simpan()
	{
		// $this->load->model('product_model');
		
		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('qty', 'Qty', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/product_tambah');
			// return;
		} else {
			$product = [
				'name' => $this->input->post('name'),
				'qty' => $this->input->post('qty'),
			];
			$this->product_model->insert($product);
	
			$this->session->set_flashdata('message', 'Data berhasil disimpan');
			redirect('Product');
		}

	}

	public function Edit($id)
	{
		// $this->load->model('product_model');
		$data['product'] = $this->product_model->getById($id);
		$this->load->view('admin/product_edit', $data);
	}

	public function Update($id)
	{
		// $this->load->model('product_model');

		$this->form_validation->set_rules('name', 'Nama', 'required');
		$this->form_validation->set_rules('qty', 'Qty', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['product'] = $this->product_model->getById($id);
			$this->load->view('admin/product_edit', $data);
			// return;
		} else {
			$tz = 'Asia/Jakarta';
			$timestamp = time();
			$date = new DateTime('now', new DateTimeZone($tz));
			$date->setTimestamp($timestamp);
			$product = [
				'name' => $this->input->post('name'),
				'qty' => $this->input->post('qty'),
				'updated_at' => $date->format('Y-m-d H:i:s'),
			];
			$this->product_model->update($id, $product);
	
			$this->session->set_flashdata('message', 'Data berhasil diupdate');
			redirect('Product');
		}
	}

	public function Hapus($id)
	{
		// $this->load->model('product_model');
		$this->product_model->delete($id);

		$this->session->set_flashdata('message', 'Data berhasil dihapus');
		redirect('Product');
	}
}
