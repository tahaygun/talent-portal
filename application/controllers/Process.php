<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process extends CI_Controller
{
	public function index()
	{
		$data = $this->tpmodel->highlightedpostings();
		$this->load->view('homepage', array('data' => $data));
	}
	public function openjoinpage()
	{
		$this->load->view('join_page');

	}
	public function register()
	{
		$reginfo = $this->input->post(null, true);
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('contactname', 'Contact Person', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confpassword', 'Password Confirm', 'required|matches[password]');


		if ($this->form_validation->run() == false) {
			$validationerror = validation_errors();
			$this->load->view('/join_page', array('reginfo' => $reginfo));
		} else {


			$this->tpmodel->insertuser($reginfo);
			$this->session->set_flashdata('message', 'You are successfully registirated!');
			redirect('/joinpage');
		}
	}
	public function login()
	{
		$loginfo = $this->input->post(null, true);

		$email = $loginfo['email'];
		$password = $loginfo['password'];
		$result = $this->tpmodel->login($email, $password);
		$notapproved = $this->tpmodel->accountchecker($email, $password);
		if ($result) {
			$this->session->set_userdata('id', $result['id']);
			redirect('/mainpageuser');
		} else {
			if ($notapproved) {
				$this->session->set_flashdata('logerror', 'Your account is not confirmed !');
				redirect('/joinpage');
			} else {
				$this->session->set_flashdata('logerror', 'Wrong password or email !');
				redirect('/joinpage');
			}

		}
	}
	public function openmainpage()
	{
		$this->load->view('mainpageuser');

	}
	public function logout()
	{
		session_destroy();
		redirect('/');

	}
}
