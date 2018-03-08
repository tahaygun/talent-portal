<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminprocess extends CI_Controller
{
    public function homepage()
    {
        if (isset($_SESSION['level']) && $_SESSION['level'] != 3) {
            $data = $this->tpmodel->highlightedpostings();
            $this->load->view('adminviews/adminhomepage', array('data' => $data));
        } else {
            redirect('/');
        }
    }
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
            $postinfo['tags'] = implode(" ", $postinfo['tags']);
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
    public function change_password()
    {
        if (isset($_SESSION['id'])) {
            $postinfo = $this->input->post(null, true);
            $oldpass = do_hash($postinfo['oldpassword']);
            $data2 = $this->tpmodel->checkpassword($oldpass);
            if ($data2 == false) {
                $this->form_validation->set_rules('oldpassword', 'Password', 'exact_length[81]');
                $this->session->set_flashdata('oldpassword', 'Your current password is not correct!');
                if ($_SESSION['level'] == 3) {
                    redirect('/options');
                } else {
                    redirect('/options-admin');
                }
            }
            $this->form_validation->set_rules('newpassword', 'Password', 'required|min_length[8]');
            $this->form_validation->set_rules('confpassword', 'Confirm Password', 'matches[newpassword]|min_length[8]');
            if ($this->form_validation->run() == false) {
                if ($_SESSION['level'] == 1) {
                    $this->load->view('adminviews/optionspage', array('postinfo' => $postinfo));
                }
                if ($_SESSION['level'] == 2) {
                    $this->load->view('adminviews/optionspagenormal', array('postinfo' => $postinfo));
                }
                if ($_SESSION['level'] == 3) {
                    $this->load->view('userviews/optionsusers', array('postinfo' => $postinfo));
                }

            } else {
                $newpass = do_hash($postinfo['newpassword']);
                $data3 = $this->tpmodel->changepassword($newpass, $_SESSION['id']);

                $this->session->set_flashdata('success', 'Your password is successfuly changed!');
                if ($_SESSION['level'] == 3) {
                    redirect('/options');
                } else {
                    redirect('/options-admin');
                }

            }
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
    public function trustedcompanies()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->trustedcompanies();
            $this->load->view('adminviews/admintrustedcompanies', array('data' => $data));
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
    public function editcompanypage($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $data = $this->tpmodel->companyeditpage($id);
            $this->load->view('adminviews/admincompanyedit', array('data' => $data));
        } else {
            redirect('/');
        }
    }
    public function editcompany()
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $postinfo = $this->input->post(null, true);
            $config['upload_path'] = './assets/img/jobs/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('companylogo')) {
                $this->tpmodel->editcompany($postinfo);
                redirect('/companies');
            } else {
                $data = $this->upload->data();
                $path = $data['file_name'];
                $this->tpmodel->editcompanywlogo($postinfo, $path);
                redirect('/companies');
            }

        } else {
            redirect('/');
        }
    }
    public function deletecompany($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->deletecompanypostings($id);
            $this->tpmodel->deletecompany($id);
            redirect('/companies');
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
            redirect('/admin-postings');
        } else {
            redirect('/');
        }

    }
    public function highlight($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->highlight($id);
            redirect('/admin-postings');
        } else {
            redirect('/');
        }

    }
    public function approve($id)
    {
        if ($_SESSION['level'] == 2 || $_SESSION['level'] == 1) {
            $this->tpmodel->approve($id);
            redirect('/admin-postings');
        } else {
            redirect('/');
        }
    }

    public function listadmins()
    {
        if ($_SESSION['level'] == 1) {
            $this->load->model('tpmodel');
            $query['admindetail'] = $this->tpmodel->adminlists();
            $this->load->view('adminviews/admin_listadmin_page', $query);
        } else {
            redirect('/');
        }
    }
    public function Editlistadmins($id)
    {
        if ($_SESSION['level'] == 1) {
            $this->load->model('tpmodel');
            $query['data'] = $this->tpmodel->admininfo($id);
            $this->load->view('adminviews/admin_editlist_page', $query);
        } else {
            redirect('/');
        }
    }

}

 
  


