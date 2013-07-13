<?php
class VideoModel extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function get_video_list()
    {
        $sql = "SELECT * FROM tbl_video";
        $query = $this->db->query($sql);
        return $query;
    }
    
    function get_video_detail($video_id)
    {
        $sql = "SELECT * FROM tbl_video WHERE video_id = ".$video_id;
        $query = $this->db->query($sql);
        return $query;
    }
}