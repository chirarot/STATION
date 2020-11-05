<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class control_station extends CI_Controller {
function __construct()
	{
		parent::__construct();
		$this->load->model('model');
	}
		public function index()
	{
		$result['shows'] = $this->model->showstate();
		$this->load->view('index', $result);
	}
		public function showadd()
	{
		$this->load->view('add_station');
	}

	public function addstate()
	{
		$theorigin = array(
			's_name' => $this->input->post('s_name'),
			's_timeout' => $this->input->post('s_timeout'),
			's_notation' => $this->input->post('s_notation'),
			's_procession' => $this->input->post('s_procession'),
		);
		$destination = array(
			'de_name' => $this->input->post('de_name'),
			'de_time' => $this->input->post('de_time'),
		);
		$huayrach = array(
			'hr_to' => $this->input->post('hr_to'),
			'hr_out' => $this->input->post('hr_out'),
);
$this->model->addorigin($theorigin);
$this->model->adddestination($destination);
$this->model->addhuayrach($huayrach);
redirect('control_station/index');
	}

}