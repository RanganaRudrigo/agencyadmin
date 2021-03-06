<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 11/7/2016
 * Time: 11:09 AM
 */
class Slnews extends Front_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Sri_lanka_News_model', 'slnews');

        $this->load->helper("url");
        $this->load->library('pagination');


    }

    function index()
    {
        $d['count'] = $this->slnews->count_by([]);
//        p($this->db->last_query());
//        $d['one_category'] = $this->category->get($CategoryId);->get_many_by(['Color'=>'2'])
//        $d['events'] = $this->project->order_by("Order", "ASC")->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "Sri-Lanka-News/";
        $config["total_rows"] = $this->slnews->count_by([]);
//        p($this->db->last_query());
        $config["per_page"] = 8;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active" > <a href="#" >';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] = '<li>';
        $config["num_tag_close"] = '</li>';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';

        $config["prev_tag_open"] = '<li>';
        $config["prev_tag_close"] = '</li>';

        $config['next_link'] = '<i class="fa fa-angle-right" aria-hidden="true"></i>';
        $config['prev_link'] = '<i class="fa fa-angle-left" aria-hidden="true"></i>';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


        $d['sl_news'] = $this->slnews->order_by("Order", "ASC")->limit($config["per_page"], ($page - 1) * 5)->get_all();
//        $d['projects'] = $this->news->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*8)->get_many_by(['Color'=>'2']);

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p($this->db->last_query());
//        p($d['count']);

        $this->view('slnews', $d);

//        $this->load->view('on_project');

    }

    function details($id)
    {
//      $d['project'] = $this->category->get($d['details']->CategoryId);
        $d['one_slnews'] = $this->slnews->get($id);
//      p($this->db->last_query());
//      echo $id;
        $this->view('srinews', $d);
    }

}