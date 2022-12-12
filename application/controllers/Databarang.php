<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Databarang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('BarangModel');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['title'] = 'DATA BARANG';
		$data['i'] =  1;
		$data['dataBarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/databarang', $data);
        $this->load->view('templates/footer');
	}

	public function editbarang($id)
	{
		$data['title'] = 'EDIT BARANG';
        $data['id'] = $id;
		$data['databarang'] = $this->BarangModel->get_ById($id);

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/editbarang', $data);
        $this->load->view('templates/footer');
	}

	public function update($id){
		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),	
			'bahan' => $this->input->post('bahan'),
			'jumlah' => $this->input->post('jumlah'),
			'keterangan' => $this->input->post('keterangan'),
			'gambar' => $this->input->post('gambar')
		];

        $this->BarangModel->edit($data, $id);
        redirect(base_url('Databarang'));
	}

	public function hapusbarang($id)
	{
		$data['title'] = 'HAPUS BARANG';
		$data['id'] = $id;
		$data['dataBarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/hapusbarang', $data);
        $this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$this->BarangModel->delete($id);
    	redirect(base_url('Databarang/'));
	}

	public function tambahbarang()
	{
		$data['title'] = 'TAMBAH BARANG';
		$data['dataBarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/tambahbarang', $data);
        $this->load->view('templates/footer');
	}

	public function add() {
		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),	
			'bahan' => $this->input->post('bahan'),
			'jumlah' => $this->input->post('jumlah'),
			'keterangan' => $this->input->post('keterangan'),
			'gambar' => $this->input->post('gambar')
		];
		$this->BarangModel->add($data);
		redirect(base_url('Databarang'));
	}
}