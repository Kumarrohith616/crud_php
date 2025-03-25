<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');


    }


	public function index(){
       
        $data['users']=$this->User_model->get_users();
		$this->load->view("dashboard",$data);
	}
    public function add(){
        $this->load->view("add");
    }


    public function add_save(){
        $data['fName']=$this->input->post('fName');
		$data['lName']=$this->input->post('lName');
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		// $this->load->model('User_model');
		$this->User_model->add($data);
		redirect('user');
    }
    public function edit($id){
        $data['user']= $this->User_model->get_user_row($id);
        $this->load->view('edit',$data);
    }
    public function edit_save($id){
        $data['fName']=$this->input->post('fName');
		$data['lName']=$this->input->post('lName');
		$data['email']=$this->input->post('email');
		$data['password']=$this->input->post('password');
		// $this->load->model('User_model');
		$this->User_model->edit($id,$data);
		redirect('user');
    }
    public function delete($id){
$this->User_model->delete($id);
redirect('user');
    }
    

}
