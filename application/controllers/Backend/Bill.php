<?php

class Bill extends CI_Controller
{
    function index()
    {
        $data['content'] = "app/page/bill";
        $this->load->view('layouts/main', $data);
    }
}
