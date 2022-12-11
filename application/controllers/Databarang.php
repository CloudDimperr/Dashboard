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

	public function editbarang()
	{
		$data['title'] = 'EDIT BARANG';
		$data['dataBarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('databarang/editbarang', $data);
        $this->load->view('templates/footer');
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
}