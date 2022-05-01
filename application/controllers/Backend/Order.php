<?php

class Order extends CI_Controller
{
    function index()
    {
        $data['content'] = "app/page/order";
        $this->load->view('layouts/main', $data);
    }
}
