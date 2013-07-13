<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $this->load->view('masterpage');
    }

    public function test_db() {
        $this->load->model('VideoModel');
        $query = $this->VideoModel->get_video_list();
        $data = array();
        $data['query'] = $query;
        $this->load->view('masterpage', $data);
        //echo 'Total Results: ' . $query->num_rows();
    }
    
    public function test_db_detail($video_id = 0, $detail = '') {
        $this->load->model('VideoModel');
        $query = $this->VideoModel->get_video_detail($video_id);
        $data = array();
        $data['query'] = $query;
        $data['detailTxt'] = $detail;
        $this->load->view('masterpage2', $data);
        //echo 'Total Results: ' . $query->num_rows();
    }

}