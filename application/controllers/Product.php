<?php

/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 10/18/2016
 * Time: 10:49 AM
 */
class Product extends Front_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model', 'product');
        $this->load->model('Category_model', 'category');

        $this->load->helper("url");
        $this->load->library('pagination');


    }


    function index()
    {
//        echo 'asdsadsa';
//        p($this->input->get('key'));

        $this->db->join('brand', 'product.BrandId=brand.BrandId');
        $this->db->join('category', 'product.CategoryId=category.CategoryID');
        $this->db->select("product.*,brand.BrandTitle,category.CategoryTitle");
        $this->db->like('BrandTitle', $this->input->get('key'));
        $this->db->or_like('CategoryTitle', $this->input->get('key'));
        $this->db->or_like('ModelNumber', $this->input->get('key'));
        $this->db->or_like('SerialNumber', $this->input->get('key'));

        $d['products'] = $this->product->order_by("Order", "ASC")->get_all();

//        p($this->db->last_query());

        $this->view('search', $d);


    }

    function product_category()
    {


        $d['count'] = $this->product->count_by([]);
//        $d['one_category'] = $this->category->get($CategoryId);
        $d['category_list'] = $this->category->order_by("Order", "ASC")->get_all();

//    p($this->db->last_query());

//        ============================================================================
        $config["base_url"] = base_url() . "Price-List/";
        $config["total_rows"] = $this->product->count_by([]);

        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = round($choice);

        $config["use_page_numbers"] = TRUE;
        $config['cur_tag_open'] = '<li class="active" > <a href="#" >';
        $config['cur_tag_close'] = '</a></li>';
        $config["num_tag_open"] = '<li  >';
        $config["num_tag_close"] = '</li>';
        $config["next_tag_open"] = '<li  >';
        $config["next_tag_close"] = '</li>';

        $config["prev_tag_open"] = '<li  >';
        $config["prev_tag_close"] = '</li>';

        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';


        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 1;


        $this->db->join('brand', 'product.BrandId=brand.BrandId');
        $this->db->join('category', 'product.CategoryId=category.CategoryID');
        $this->db->select("product.*,brand.BrandTitle,category.CategoryTitle");
        $d['products'] = $this->product->order_by("Order", "ASC")->limit($config["per_page"], ($page - 1) * 10)->get_all();

//        $d["products"] = $this->product->order_by("Order", "ASC")->limit($config["per_page"],($page-1)*16)->get_many_by(['CategoryId'=>$CategoryId]);
        $d["links"] = $this->pagination->create_links();


        $d['link'] = "";
//        p(($page));

//        p($this->db->last_query());
//        p($this->uri->segment(2));
//        p($CategoryId);

//        $this->view('product',$d);
        $this->view('price_list', $d);


    }


    function detail($ProductId)
    {

        $d['details'] = $this->product->get($ProductId);
        $d['category_list'] = $this->category->get_all();
        $d['one_category'] = $this->category->get($d['details']->CategoryId);
//        $d['related_products'] = $this->product->get_all($d['details']->CategoryId);
        $d['related_products'] = $this->product->limit(5)->order_by('rand()')->get_many_by(['CategoryId' => $d['details']->CategoryId]);
//        p($this->db->last_query());


//        p($d['related_products']);

        $this->view('detail', $d);


    }
}