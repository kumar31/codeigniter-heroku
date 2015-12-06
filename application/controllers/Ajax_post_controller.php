<?php if ( ! defined('BASEPATH') ) exit('No direct script access allowed');

class Ajax_post_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
    }

    // Show view Page
    public function index() {
        $this->load->view("ajax_post_view");
    }

    // This function call from AJAX
    public function user_data_submit() {
        $data = array(
            'username' => $this->input->post('name'),
            'pwd'=>$this->input->post('pwd')
        );

        //Either you can print value or you can send value to database
        header('Access-Control-Allow-Origin: *');
        echo json_encode($data);
    }
}

