<?php



class Home extends CI_Controller{
    public function index(){
       

       
        $this->load->view('web/home');
    }

    public function play(){
        $this->load->model('M_sound');
        $data['sound']= $this->M_sound->get_sound();
        $this->load->view('web/play',$data);
    }
}