<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminprocess extends CI_Controller
{
    public function adminpostingpage()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
            $data = $this->tpmodel->allpostings();
            $this->load->view('adminviews/adminpostingspage', array('data' => $data));
        } else {
            redirect('/');
        }

    }
    public function postrequests()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->requestedpostings();
            $this->load->view('adminviews/postrequests', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function highlightedposts()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->highlightedpostings();
            $this->load->view('adminviews/highlightedpostings', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function editpageadmin($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $postinfo = $this->tpmodel->editinfo($id);

            $this->load->view('adminviews/editpageadmin', array('postinfo' => $postinfo));
        } else {
            redirect('/');
        }


    }
    public function editnow()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $postinfo = $this->input->post(null, true);
            $this->tpmodel->editadmin($postinfo);
            redirect('/');
        } else {
            redirect('/');
        }
    }
    public function optionsadmin()
    {
        if ($_SESSION['level'] == 1) {
            $this->load->view('adminviews/optionspage');
        } elseif ($_SESSION['level'] == 2) {
            $this->load->view('adminviews/optionspagenormal');
        } else {
            redirect('/');
        }

    }
    public function companyrequests()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->companyrequests();
            $this->load->view('adminviews/admincompanyrequests', array('data' => $data));
        } else {
            redirect('/');
        }
    }

    public function approvecompany($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->approvecompany($id);
            redirect('/company-requests');
        } else {
            redirect('/');
        }
    }
    public function editcompany($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->companyeditpage($id);
            $data['password'] = $this->encrypt->decode($data['password']);
            $this->load->view('adminviews/admincompanyedit', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function addadmin()
    {
        if ($_SESSION['level'] == 1) {
            $newadmininfo = $this->input->post(null, true);
            $this->tpmodel->newadmin($newadmininfo);
            redirect('/');
        } else {
            redirect('/');
        }
    }

    public function newposting()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->load->view('adminviews/adminnewposting');
        } else {
            redirect('/');
        }

    }
    public function createnewposting()
    {
        $postinfo = $this->input->post(null, true);
        $this->form_validation->set_rules('tp-title', 'Title', 'required|max_length[255]');
        $this->form_validation->set_rules('tp-description', 'Description', 'required|max_length[500]');
        $this->form_validation->set_rules('tp-tags', 'Tags', 'required');
        $this->form_validation->set_rules('tp-about', 'About Company', 'required|max_length[500]');
        $this->form_validation->set_rules('tp-identifies', 'Identifies', 'required');
        $this->form_validation->set_rules('tp-startdate', 'Start Date', 'required');
        $this->form_validation->set_rules('tp-enddate', 'End Date', 'required');
        $this->form_validation->set_rules('tp-link', 'Application Link', 'required|valid_url');


        $config['upload_path'] = './assets/img/jobs/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false || !$this->upload->do_upload('support-image')) {
            $error = $this->upload->display_errors();
            $this->load->view('adminviews/adminnewposting', array('postinfo' => $postinfo, 'error' => $error));
        } else {
            $data = $this->upload->data();
            $path = $data['file_name'];
            $this->tpmodel->insertpostingadmin($postinfo, $path);
            redirect('/');
        }
    }
    public function unhighlight($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->unhighlight($id);
            redirect('/admin-home');
        } else {
            redirect('/');
        }

    }
    public function highlight($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->highlight($id);
            redirect('/admin-home');
        } else {
            redirect('/');
        }

    }
    public function approve($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->approve($id);
            redirect('/admin-home');
        } else {
            redirect('/');
        }

    }
}

