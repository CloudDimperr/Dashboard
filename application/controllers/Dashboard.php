<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		$data['title'] = 'HALAMAN DASHBOARD';
		$data['barangBaik'] = 0;
		$data['barangRusak'] = 0;
		$data['barangKurangbaik'] = 0;
		$data['barangHilang'] = 0;
		$data['jumlahBarang'] = 0;

		$data['databarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('dashboard/dashboard', $data);
        $this->load->view('templates/footer');
	}

	public function signout()
	{
		$data['title'] = 'LOG OUT';

		$data['barangBaik'] = 0;
		$data['barangRusak'] = 0;
		$data['barangKurangbaik'] = 0;
		$data['barangHilang'] = 0;
		$data['jumlahBarang'] = 0;

		$data['databarang'] = $this->BarangModel->get_barang();

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('dashboard/signout', $data);
        $this->load->view('templates/footer');
	}
}