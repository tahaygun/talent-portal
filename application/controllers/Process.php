<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Process extends CI_Controller
{
	public function index()
	{
		if (isset($_SESSION['level']) && ($_SESSION['level'] != 3)) {
			redirect('/admin-home');
		} else {
			$data = $this->tpmodel->highlightedpostings();
			$this->load->view('userviews/homepage', array('data' => $data));
		}
	}

	public function openjoinpage()
	{
		if (isset($_SESSION['id'])) {
			redirect('/mypage');
		} else {
			$this->load->view('userviews/join_page');
		}


	}
	public function register()
	{
		$reginfo = $this->input->post(null, true);
		$this->form_validation->set_rules('companyname', 'Company Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('contactperson', 'Contact Person', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		$this->form_validation->set_rules('confpassword', 'Password Confirm', 'required|matches[password]');

		$config['upload_path'] = './assets/img/jobs/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);

		if ($this->form_validation->run() == false || !$this->upload->do_upload('company-logo')) {
			$error = $this->upload->display_errors();
			$this->load->view('userviews/join_page', array('reginfo' => $reginfo, 'error' => $error));
		} else {
			$reginfo['password'] = do_hash($reginfo['password']);
			$data = $this->upload->data();
			$path = $data['file_name'];
			$this->tpmodel->insertuser($reginfo, $path);
			$this->session->set_flashdata('message', 'You are successfully registirated!');
			redirect('/joinpage');
		}
	}
	public function login()
	{
		$loginfo = $this->input->post(null, true);

		$email = $loginfo['email'];
		$password = do_hash($loginfo['password']);
		$result = $this->tpmodel->login($email, $password);
		$notapproved = $this->tpmodel->accountchecker($email, $password);
		if ($result) {
			$this->session->set_userdata('id', $result['id']);
			$this->session->set_userdata('name', $result['companyname']);
			$this->session->set_userdata('level', $result['adminlevel']);
			if ($result['adminlevel'] != 3) {
				redirect('/admin-home');
			} else {
				redirect('/mypage');
			}

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

	public function opendetailspage($id)
	{
		if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
			$data = $this->tpmodel->details($id);
			$this->load->view('adminviews/admindetailspage', array('data' => $data));
		} else {
			$data = $this->tpmodel->details($id);
			$this->load->view('userviews/detailspage', array('data' => $data));
		}

	}
	public function aboutcompany($id)
	{
		if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
			$data = $this->tpmodel->aboutcompany($id);
			$postings = $this->tpmodel->companypostings($id);
			$this->load->view('adminviews/adminaboutcompany', array('data' => $data, 'postings' => $postings));
		} else {
			$data = $this->tpmodel->aboutcompany($id);
			$postings = $this->tpmodel->companypostings($id);
			$this->load->view('userviews/aboutcompany', array('data' => $data, 'postings' => $postings));
		}

	}
	public function editpage($id)
	{
		$postinfo = $this->tpmodel->editinfo($id);
		if ($_SESSION['id'] == $postinfo['user_id']) {
			$data2 = $this->tpmodel->aboutcompany($_SESSION['id']);
			if ($data2['trusted'] == 0) {
				$this->load->view('userviews/editpage', array('postinfo' => $postinfo));
			} else {
				$this->load->view('userviews/editpagetrusted', array('postinfo' => $postinfo));
			}
		} else {
			redirect('/');

		}
	}
	public function editnow()
	{


		if (isset($_SESSION['id'])) {
			$data2 = $this->tpmodel->aboutcompany($_SESSION['id']);
			if ($data2['trusted'] == 0) {
				$postinfo = $this->input->post(null, true);
				$postinfo['tags'] = implode(" ", $postinfo['tags']);
				$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');
				$this->form_validation->set_rules('description', 'Description', 'required|max_length[500]');
				$this->form_validation->set_rules('about', 'About Company', 'required|max_length[500]');
				$this->form_validation->set_rules('identifies', 'Identifies', 'required');
				$this->form_validation->set_rules('startdate', 'Start Date', 'required');
				$this->form_validation->set_rules('enddate', 'End Date', 'required');
				$this->form_validation->set_rules('link', 'Application Link', 'required|valid_url');
				if (strlen($postinfo['tags']) < 3) {
					$this->form_validation->set_rules('tags', 'Tags', 'required');
				}
				if ($this->form_validation->run() == false) {
					$this->load->view('userviews/editpage', array('postinfo' => $postinfo));
				} else {
					$this->tpmodel->editpost($postinfo);
					redirect('/mypage');
				}
			} else {
				$postinfo = $this->input->post(null, true);
				$postinfo['tags'] = implode(" ", $postinfo['tags']);
				$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');
				$this->form_validation->set_rules('description', 'Description', 'required|max_length[500]');
				$this->form_validation->set_rules('about', 'About Company', 'required|max_length[500]');
				$this->form_validation->set_rules('identifies', 'Identifies', 'required');
				$this->form_validation->set_rules('vacancy', 'Position', 'required');
				$this->form_validation->set_rules('startdate', 'Start Date', 'required');
				$this->form_validation->set_rules('enddate', 'End Date', 'required');
				$this->form_validation->set_rules('link', 'Application Link', 'required|valid_url');
				if (strlen($postinfo['tags']) < 3) {
					$this->form_validation->set_rules('tags', 'Tags', 'required');
				}
				if ($this->form_validation->run() == false) {
					$this->load->view('userviews/editpagetrusted', array('postinfo' => $postinfo));
				} else {
					$this->tpmodel->editposttrusted($postinfo);
					redirect('/mypage');
				}
			}
		} else {
			redirect('/');
		}

	}


	public function openmainpage()
	{
		$data = $this->tpmodel->mypage($_SESSION['id']);
		$this->load->view('userviews/mainpageuser', array('data' => $data));
	}
	public function showcompanylist()
	{
		if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
			$data = $this->tpmodel->allcompanies();
			$this->load->view('adminviews/admincompaniespage', array('data' => $data));
		} else {
			$data = $this->tpmodel->allcompanies();
			$this->load->view('userviews/companiespage', array('data' => $data));
		}

	}
	public function newpostingpage()
	{
		if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
			redirect('/new-posting-admin');
		} elseif (isset($_SESSION['id'])) {
			$data2 = $this->tpmodel->aboutcompany($_SESSION['id']);
			if ($data2['trusted'] == 1) {
				$data = $this->tpmodel->companyeditpage($_SESSION['id']);
				$data['today'] = date('Y-m-d');
				$this->load->view('userviews/newpostingtrusted', array('data' => $data));
			} else {
				$data = $this->tpmodel->companyeditpage($_SESSION['id']);
				$data['today'] = date('Y-m-d');
				$this->load->view('userviews/newposting', array('data' => $data));
			}

		} else {
			redirect('/');
		}
	}

	public function search()
	{
		$result = $this->input->post(null, true);
		$data = $this->tpmodel->search($result);
		$this->load->view('userviews/resultpage', array('data' => $data, 'inputs' => $result));
	}

	public function createnewposting()
	{
		$data2 = $this->tpmodel->aboutcompany($_SESSION['id']);
		if ($data2['trusted'] == 0) {
			$postinfo = $this->input->post(null, true);
			$postinfo['tags'] = implode(" ", $postinfo['tags']);
			$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');
			$this->form_validation->set_rules('description', 'Description', 'required|max_length[500]');
			$this->form_validation->set_rules('about', 'About Company', 'required|max_length[500]');
			$this->form_validation->set_rules('identifies', 'Identifies', 'required');
			$this->form_validation->set_rules('startdate', 'Start Date', 'required');
			$this->form_validation->set_rules('enddate', 'End Date', 'required');
			$this->form_validation->set_rules('link', 'Application Link', 'required|valid_url');
			if (strlen($postinfo['tags']) < 3) {
				$this->form_validation->set_rules('tags', 'Tags', 'required');
			}

			$config['upload_path'] = './assets/img/jobs/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);

			if ($this->form_validation->run() == false || !$this->upload->do_upload('support-image')) {
				$error = $this->upload->display_errors();
				$data = $this->tpmodel->companyeditpage($_SESSION['id']);
				$this->load->view('userviews/newposting', array('postinfo' => $postinfo, 'data' => $data, 'error' => $error));
			} else {
				$data = $this->upload->data();
				$path = $data['file_name'];
				$this->tpmodel->updateabout($postinfo);
				$this->tpmodel->insertposting($postinfo, $path);
				redirect('/mypage');
			}
		} else {
			$postinfo = $this->input->post(null, true);
			$postinfo['tags'] = implode(" ", $postinfo['tags']);
			$this->form_validation->set_rules('title', 'Title', 'required|max_length[255]');
			$this->form_validation->set_rules('description', 'Description', 'required|max_length[500]');
			$this->form_validation->set_rules('about', 'About Company', 'required|max_length[500]');
			$this->form_validation->set_rules('identifies', 'Identifies', 'required');
			$this->form_validation->set_rules('startdate', 'Start Date', 'required');
			$this->form_validation->set_rules('vacancy', 'Position', 'required');
			$this->form_validation->set_rules('enddate', 'End Date', 'required');
			$this->form_validation->set_rules('link', 'Application Link', 'required|valid_url');
			if (strlen($postinfo['tags']) < 3) {
				$this->form_validation->set_rules('tags', 'Tags', 'required');
			}

			$config['upload_path'] = './assets/img/jobs/';
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload', $config);

			if ($this->form_validation->run() == false || !$this->upload->do_upload('support-image')) {
				$error = $this->upload->display_errors();
				$data = $this->tpmodel->companyeditpage($_SESSION['id']);
				$this->load->view('userviews/newpostingtrusted', array('postinfo' => $postinfo, 'data' => $data, 'error' => $error));
			} else {
				$data = $this->upload->data();
				$path = $data['file_name'];
				$this->tpmodel->updateabout($postinfo);
				$this->tpmodel->insertpostingtrusted($postinfo, $path);
				redirect('/mypage');
			}
		}
	}

	public function jobspage()
	{
		$data = $this->tpmodel->activepostings();
		$this->load->view('userviews/jobspage', array('data' => $data));
	}
	public function jobspagecategory($ct)
	{
		$data = $this->tpmodel->jobsbycategory($ct);
		$this->load->view('userviews/jobsbycategory', array('data' => $data, 'category' => $ct));
	}




	public function logout()
	{
		session_destroy();
		redirect('/');


	}


	public function delete($id)
	{
		$data = $this->tpmodel->details($id);
		if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
			$this->tpmodel->deletenow($id);
			redirect('/');
		} elseif (isset($_SESSION['id']) && ($_SESSION['id'] == $data['user_id'])) {
			$this->tpmodel->deletenow($id);
			redirect('/mypage');
		} else {
			redirect('/');
		}

	}

}




