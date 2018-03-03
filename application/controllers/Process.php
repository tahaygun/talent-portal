<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process extends CI_Controller
{
	public function index()
	{
		$this->load->view('postjob_page');

	// 	$data = $this->tpmodel->highlightedpostings();
	// 	$this->load->view('homepage', array('data' => $data));
	// }
	// public function openjoinpage()
	// {
	// 	$this->load->view('join_page');
	}
}
