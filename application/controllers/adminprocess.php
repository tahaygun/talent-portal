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
        if (isset($_SESSION['level']) && $_SESSION['level'] == 1) {
            $data = $this->tpmodel->requestedpostings();
            $this->load->view('adminviews/postrequests', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function highlightedposts()
    {
        if (isset($_SESSION['level']) && ($_SESSION['level'] == 1)) {
            $data = $this->tpmodel->highlightedpostings();
            $this->load->view('adminviews/highlightedpostings', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function editpageadmin($id)
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 1) {
            $postinfo = $this->tpmodel->editinfo($id);

            $this->load->view('adminviews/editpageadmin', array('postinfo' => $postinfo));
        } else {
            redirect('/');
        }


    }
    public function editnow()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] == 1) {
            $postinfo = $this->input->post(null, true);
            $this->tpmodel->editadmin($postinfo);
            redirect('/');
        } else {
            redirect('/');
        }
    }
}

