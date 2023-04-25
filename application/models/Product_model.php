<?php
class Product_model extends CI_Model {
	private $_table = 'product';

	public function get()
	{
		$query = $this->db->get($this->_table);
		return $query->result();
	}

	public function getById($id)
	{
		if(!$id) {
			return;
		}

		$query = $this->db->get_where($this->_table, ['id' => $id]);
		return $query->row();
	}

	public function insert($product)
	{
		if(!$product) {
			return;
		}

		return $this->db->insert($this->_table, $product);
	}

	public function update($id, $product)
	{
		if(!$id || !$product) {
			return;
		}

		$this->db->update($this->_table, $product, ['id' => $id]);
	}

	public function delete($id)
	{
		if(!$id) {
			return;
		}

		$this->db->delete($this->_table, ['id' => $id]);
	}

	public function total()
	{
		return $this->db->count_all($this->_table);
	}
}
