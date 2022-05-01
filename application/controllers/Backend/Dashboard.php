<?php

class Dashboard extends CI_Controller
{

    function __construct()
    {

        parent::__construct();
        // $this->isUserLoggedIn = $this->session->userdata('is_loggedin');
    }

    function index()
    {
        $data['content'] = "app/dashboard";
        $this->load->view('layouts/main', $data);
    }
}
