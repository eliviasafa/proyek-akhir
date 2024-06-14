<?php
defined('BASEPATH') or exit('No direct script acces allowed');
class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Sistem Informasi Jaringan Prasarana',
            'isi' => 'v_home'
        );

        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}

/* End of file Home.php */
