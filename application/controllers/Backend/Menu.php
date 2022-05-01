<?php

class Menu extends CI_Controller
{
    function index()
    {
        $data['content'] = "app/page/menu";
        $this->load->view('layouts/main', $data);
    }
}
