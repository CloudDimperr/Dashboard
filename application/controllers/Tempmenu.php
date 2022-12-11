<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tempmenu extends CI_Controller {

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
	public function tempmenu()
	{
		$data['title'] = 'TEMPLATE MENU';

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('tempmenu/tempmenu', $data);
        $this->load->view('templates/footer');
	}

	public function form()
	{
		$data['title'] = 'FORM';

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('tempmenu/form', $data);
        $this->load->view('templates/footer');
	}

	public function texteditor()
	{
		$data['title'] = 'TEXT EDITOR';

		$this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidetopbar');
		$this->load->view('tempmenu/texteditor', $data);
        $this->load->view('templates/footer');
	}

}