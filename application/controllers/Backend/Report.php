<?php

class Report extends CI_Controller
{
    function index()
    {
        $data['content'] = "app/page/report";
        $this->load->view('layouts/main', $data);
    }
}
