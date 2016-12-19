<?php

class Home extends Front_Controller
{

    function __construct(){
        parent::__construct();

        $this->load->model('Vacancy_model', 'vacancy');
        $this->load->model('Country_model', 'country');
        $this->load->model('Data_bank_model', 'data');

        $this->Food = [
            ['index'=>'1', 'value'=> "Allowance"],
            ['index'=>'2', 'value'=> "Provided"],
            ['index'=>'3', 'value'=> "Not Provided"],
            ['index'=>'4', 'value'=> "Free"],
            ['index'=>'5', 'value'=> "----"]
        ];
        $this->Accommodation = [
            ['index'=>'1', 'value'=> "Allowance"],
            ['index'=>'2', 'value'=> "Provided"],
            ['index'=>'3', 'value'=> "Not Provided"],
            ['index'=>'4', 'value'=> "Free"],
            ['index'=>'5', 'value'=> "----"]
        ];
    }

    function index()
    {


        $this->load->model('slider_model', 'slider');
        $this->load->model('Project_model', 'project');
        $this->load->model('Sri_lanka_News_model', 'slnews');
        $this->load->model('News_model', 'news');
        $this->load->model('Blog_model', 'blog');




//
        $d['sliders'] = $this->slider->order_by('Order', 'ASC')->get_all();
        $d['projects'] = $this->project->order_by("Order", "ASC")->limit(4)->get_all();
        $d['srinews'] = $this->slnews->order_by("Order", "ASC")->limit(4)->get_all();
        $d['blogs'] = $this->blog->order_by("Order", "ASC")->limit(3)->get_all();
        $d['mainnews'] = $this->news->order_by("Order", "ASC")->limit(2)->get_all();
//
//        $this->db->join('brand','product.BrandId=brand.BrandId');
//        $this->db->join('category','product.CategoryId=category.CategoryID');
//        $this->db->select("product.*,brand.BrandTitle,category.CategoryTitle");
//        $d['products'] = $this->product->order_by("Order", "ASC")->limit(15)->order_by('ProductId','DESC')->get_all();


//
//        $this->load->model('event_model','event');
//        $d['UpcomingEvents'] = $this->event->limit(3)->order_by('EventDate')->get_many_by(
//          array('EventDate >' => date('Y-m-d'))
//        );
//
//        $this->load->model('gallery_model','gallery');
//        $d['galleries'] = $this->gallery->limit(12)->order_by('GalleryId','desc')->get_all();

        $d['foods'] = $this->Food;
        $d['accommodations'] = $this->Accommodation;

        $d['vacancies'] = $this->vacancy->join('country')
            ->fields("{$this->vacancy->table()}.* , country.CountryId,CountryTitle,Image ")->limit(13)->order_by("Order", "ASC")
            ->get_all();
//
//        $this->load->model('winners_model','winner');
//        $d['winners'] = $this->winner->get_all();
//        p($this->db->last_query());
//        p($d);
//        exit;
        $this->view('index', $d);

//        $this->load->view('index');
    }

    public function about_us()
    {
        $this->view('about_us');
    }

    public function who()
    {
        $this->view('who');
    }

    public function chairman()
    {
        $this->view('chairman');
    }

    public function history()
    {
        $this->view('history');
    }

    public function object()
    {
        $this->view('object');
    }

    public function member()
    {
        $this->view('member');
    }
//    public function news_events()
//    {
//        $this->load->model('Events_model','event');
//        $d['events'] = $this->event->order_by('Order','ASC')->get_all();
//
//        $this->view('news_events',$d);
//    }
    public function price_list()
    {
        $this->view('price_list');
    }

    public function collector_wanted()
    {
        $this->view('collector_wanted');
    }

    public function contact_us()
    {
        $d['name'] = "";
        $d['email'] = "";
        $d['subject'] = "";
        $d['phone'] = "";
        $d['comment'] = "";

        if ($this->input->post()) {

            $this->form_validation->set_rules('form_name', 'Name', 'required');
            $this->form_validation->set_rules('form_email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('form_message', 'Message', 'required');
            $this->form_validation->set_rules('form_phone', 'Phone', 'numeric');
            if ($this->form_validation->run()) {
//                p('02');
                $this->load->library('email');
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $this->email->to(email);
                $this->email->from($this->input->post('form_email'), $this->input->post('form_name'));
                $this->email->subject(TITLE . " - Contact Us Form");
                $msg = '<html><body>';
                $msg .= '<img src="' . base_url() . 'media/images/logo.jpg" alt="' . TITLE . '" />';
                $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                $msg .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($this->input->post('form_name')) . "</td></tr>";
                $msg .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($this->input->post('form_email')) . "</td></tr>";
                $msg .= "<tr><td><strong>Subject:</strong> </td><td>" . strip_tags($this->input->post('form_subject')) . "</td></tr>";
                $msg .= "<tr><td><strong>Telephone:</strong> </td><td>" . strip_tags($this->input->post('form_phone')) . "</td></tr>";
                $msg .= "<tr><td><strong>Comment:</strong> </td><td>" . strip_tags($this->input->post('form_message')) . "</td></tr>";
                $msg .= "</table>";
                $msg .= "</body></html>";

                $this->email->message($msg);
                $this->email->send();
                $d['message'] = "<div class='alert alert-success'>Your message was sent successfully. Thanks.</div>";

                $this->view('contact_us', $d);
            } else {
                $d['name'] = $this->input->post('form_name');
                $d['email'] = $this->input->post('form_email');
                $d['subject'] = $this->input->post('form_subject');
                $d['phone'] = $this->input->post('form_phone');
                $d['comment'] = $this->input->post('form_message');

                $d['message'] = "<div class='alert alert-danger'>Validation errors occurred. Please confirm the fields and submit it again.</div>";
                $this->view('contact_us', $d);
            }
        } else {

            $this->view('contact_us', $d);
//            $this->load->view('contacts');
        }

//        $this->view('contact_us');
    }

//    ====================================================================================================
    public function services()
    {
        $this->view('services');
    }
    public function ourclients()
    {
        $this->view('client');
    }
    public function databank()
    {
        $d['datas'] = $this->data->order_by('Order','ASC')->get_all();
        $this->view('databank',$d);
    }
    public function foreign_principals()
    {
        $d['meaage'] = "";

        if ($this->input->post()) {

            $this->form_validation->set_rules('from[Name]', 'Name', 'required');
            $this->form_validation->set_rules('from[Email]', 'Email', 'required|valid_email');
//            $this->form_validation->set_rules('form_message', 'Message', 'required');
            $this->form_validation->set_rules('form[Telephone]', 'Telephone', 'numeric');
            if ($this->form_validation->run()) {
                $this->load->library('email');
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $this->email->to(email);
                $this->email->from($this->input->post('from[Email]'), $this->input->post('from[Name]'));
                $this->email->subject(TITLE . " - Foreign Principals Form");
                $msg = '<html><body>';
                $msg .= '<img src="' . base_url() . 'media/images/logo.jpg" alt="' . TITLE . '" />';
                $msg .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
                $msg .= "<tr><td><strong>Name:</strong> </td><td>" . strip_tags($this->input->post('form[Name]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Address:</strong> </td><td>" . strip_tags($this->input->post('form[Address]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Country:</strong> </td><td>" . strip_tags($this->input->post('form[Country]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Telephone:</strong> </td><td>" . strip_tags($this->input->post('form[Telephone]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Fax:</strong> </td><td>" . strip_tags($this->input->post('form[Fax]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($this->input->post('form[Email]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Nature of Business:</strong> </td><td>" . strip_tags($this->input->post('form[Business]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Gender:</strong> </td><td>" . strip_tags($this->input->post('form[Gender]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Job Category:</strong> </td><td>" . strip_tags($this->input->post('form[Category]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Age:</strong> </td><td>" . strip_tags($this->input->post('form[Age]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Quantity:</strong> </td><td>" . strip_tags($this->input->post('form[Quantity]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Religion:</strong> </td><td>" . strip_tags($this->input->post('form[Religion]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Experience:</strong> </td><td>" . strip_tags($this->input->post('form[Experience]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Salary:</strong> </td><td>" . strip_tags($this->input->post('form[Salary]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Contract Period:</strong> </td><td>" . strip_tags($this->input->post('form[Period]')) . "</td></tr>";
                $msg .= "<tr><td><strong>Remarks:</strong> </td><td>" . strip_tags($this->input->post('form[Remarks]')) . "</td></tr>";
                $msg .= "</table>";
                $msg .= "</body></html>";

                $this->email->message($msg);
                $this->email->send();

                $this->session->set_flashdata('notification', ["alert" => "success", "text" => '<strong> Your message was sent successfully. Thanks. '  . '</strong>']);

//                $d['message'] = '<div class="alert alert-success alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button"> * </button>Your message was sent successfully. Thanks.</div>';
//                $this->view('principals', $d);
                redirect(current_url());
            } else {
                $this->session->set_flashdata('notification', ["alert" => "danger", "text" => '<strong> ' .  ' Error ! Validation errors occurred. Please confirm the fields and submit it again.</strong>']);
//                $d['message'] = '<div class="alert alert-danger alert-dismissable"><button aria-hidden="true" data-dismiss="alert" class="close" type="button"> * </button>Validation errors occurred. Please confirm the fields and submit it again.</div>';
//                $this->view('principals', $d);
                redirect(current_url());
            }
        }


        $this->view('principals', $d);
    }

    function static_page($page)
    {
//        $this->load->view($page);
    }

    function sent_mail()
    {

//        $this->load->library('email',array('mailtype' => 'html'));
//
//        $message = "";
//        $status = "false";
//
//        if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
//            if( $_POST['form_name'] != '' AND $_POST['form_email'] != '' AND $_POST['form_subject'] != '' ) {
//
//                $name = $_POST['form_name'];
//                $email = $_POST['form_email'];
//                $subject = $_POST['form_subject'];
//                $phone = $_POST['form_phone'];
//                $message = $_POST['form_message'];
//
//                $subject = isset($subject) ? $subject : 'New Message | Contact Form';
//
//                $botcheck = $_POST['form_botcheck'];
//
//                $toemail = 'gowtham@itmartx.com'; // Your Email Address
//                $toname = TITLE; // Your Name
//
//                if( $botcheck == '' ) {
//
//                    $this->email->from( $email , $name );
//                    $this->email->to( $toemail , $toname );
//                    $this->email->subject($subject);
//
//                    $name = isset($name) ? "Name: $name<br><br>" : '';
//                    $email = isset($email) ? "Email: $email<br><br>" : '';
//                    $subject = isset($subject) ? "Subject: $subject<br><br>" : '';
//                    $phone = isset($phone) ? "Phone: $phone<br><br>" : '';
//                    $message = isset($message) ? "Message: $message<br><br>" : '';
//
//                    $referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This Form was submitted from: ' . $_SERVER['HTTP_REFERER'] : '';
//
//                    $body = "$name $email $subject $phone $message $referrer";
//
//                    $this->email->message( $body );
//                    $sendEmail = $this->email->send();
//
//                    if( $sendEmail == true ):
//                        $message = 'We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible.';
//                        $status = "true";
//                    else:
//                        $message = 'Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '';
//                        $status = "false";
//                    endif;
//                } else {
//                    $message = 'Bot <strong>Detected</strong>.! Clean yourself Botster.!';
//                    $status = "false";
//                }
//            } else {
//                $message = 'Please <strong>Fill up</strong> all the Fields and Try Again.';
//                $status = "false";
//            }
//        } else {
//            $message = 'An <strong>unexpected error</strong> occured. Please Try Again later.';
//            $status = "false";
//        }
//
//        $status_array = array( 'message' => $message, 'status' => $status);
//        echo json_encode($status_array);
    }


}