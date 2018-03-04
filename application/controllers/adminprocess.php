<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminprocess extends CI_Controller
{
    public function adminpostingpage()
    {
        if ($_SESSION['level'] == 1) {
            $data = $this->tpmodel->allpostings();
            $this->load->view('adminviews/adminpostingspage', array('data' => $data));
        } else {
            redirect('/');
        }

    }
    public function postrequests()
    {
        $data = $this->tpmodel->requestedpostings();
        $this->load->view('adminviews/postrequests', array('data' => $data));
    }
    public function highlightedposts()
    {
        $data = $this->tpmodel->highlightedpostings();
        $this->load->view('adminviews/highlightedpostings', array('data' => $data));
    }
}
