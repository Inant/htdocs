<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Model {

	private $_table = "barang"

	public $kode_barang;
	public $nama_barang;
	public $deskripsi_barang;
	public $stok_barang;
	public $harga_barang;
	//untuk ambil data keseluruhan dari tabel barang
	public function getAll(){
	//mysqli_query("select *from barang;")
		return $this->db->get(($this->_table->result())
	}
	//untuk ambil data perbaris berdasarkan kode barang
	public function getAllById($kode){
		//mysqli("select *from barang where kode_barang='.$kode_barang'")
		return $this->db->get_where($this->_table,['kode_barang'=>$kode])->row();
	}
	//untuk menyimpan hasil inputan ke database
	public function save(){
		$post=$this->input->post();
		$this->kode_barang=$post['kode_barang'];
		$this->nama_barang=$post['nama_barang'];
		$this->deskripsi_barang=$post['deskripsi_barang'];
		$this->stok_barang=$post['stok_barang'];
		$this->harga_barang=$post['harga_barang'];
		$this->db->insert($this->_table,$this);
	}
	//untuk melakukan edit data
	public function edit($kode){
		$post=$this->input->post();
		$this->kode_barang=$post['kode_barang'];
		$this->nama_barang=$post['nama_barang'];
		$this->deskripsi_barang=$post['deskripsi_barang'];
		$this->stok_barang=$post['stok_barang'];
		$this->harga_barang=$post['harga_barang'];
		$this->db->update($this->_table,$this,array('kode_barang'=>$post['kode_barang']));

	}
	public function delete($kode){

	}
}
