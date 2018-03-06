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
    public function showcompanylist()
    {
        $data = $this->tpmodel->allcompanies();
        $this->load->view('adminviews/adminshowcompaniespage', array('data' => $data));
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
}

