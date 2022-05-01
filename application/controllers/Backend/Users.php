<?php

class Users extends CI_Controller
{
    function index()
    {
        $data['content'] = "app/page/users";
        $this->load->view('layouts/main', $data);
    }
}
