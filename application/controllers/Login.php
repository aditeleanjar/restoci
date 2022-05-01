<?php

class Login extends CI_Controller
{
    function __construct()
    {

        parent::__construct();
        $this->isUserLoggedIn = $this->session->userdata('is_loggedin');
    }

    function index()
    {
        // if ($this->isUserLoggedIn) {
        //     if ($this->session->userdata('is_active') == 1) {
        //         redirect('backend/dashboard');
        //     }
        // }

        $this->load->view('layouts/login');
    }
}
