<?php

/**
 * Created by PhpStorm.
 * User: Gowtham
 * Date: 5/4/2016
 * Time: 3:34 PM
 */
class Front_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
        if (!defined('IMG')) define('IMG', base_url('images') . "/");
        if (!defined('UP')) define('UP', base_url('uploads') . "/");
        if (!defined('UPT')) define('UPT', base_url('uploads/thumbs') . "/");
    }

    function view($page, $data = [])
    {
        $this->load->model('Brand_model', 'brand');
        $data['brands'] = $this->brand->order_by("Order", "ASC")->limit(7)->get_all();

        $this->load->model('Events_model', 'event');
        $data['events'] = $this->event->order_by("Order", "ASC")->limit(3)->get_all();

        $this->load->model('Sri_lanka_News_model', 'slnews');
        $data['sl_news'] = $this->slnews->order_by("Order", "ASC")->limit(5)->get_all();

        $this->load->view($page, $data);
    }


}