<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct() { 
        parent::__construct(); 
		if($this->session->userdata('id'))
  {
   redirect('private_area');
  }
        $this->load->library('form_validation'); 
		$this->load->library('encryption');
		$this->load->model('Register_model');
		$this->load->model('Login_model');
		$this->load->model('Custbook_model');
		$this->load->library('session');
    } 
	public function index()
	{
		$this->load->view('home');          
	}
    public function login()
	{
		$this->load->view('login');
	}
    public function last_posted()
	{
		$this->load->view('last_posted');
	}
    public function our_mission()
	{
		$this->load->view('our_mission');
	}
    public function contact()
	{
		$this->load->view('contact');
	}
	public function cust_book()
	{
		if($this->session->userdata('Home/cust_dashboard')){
		$this->load->view('cust_book');
            }
        else{
			redirect('login');
        }
		
	}
	public function cust_dashboard()
	{	
		$this->load->view('cust_dashboard');
    }
	public function cust_myearning()
	{
		if($this->session->userdata('Home/cust_dashboard'))
		{
		$this->load->view('cust_myearning');
        }
        else{
           redirect('login');
        }
    }
	public function cust_crud()
	{
		if($this->session->userdata('Home/cust_dashboard'))
		{
		$this->load->view('cust_crud');
        }
        else{
           redirect('login');
        }
    }
	public function g_dashboard()
	{
		if($this->session->userdata('Home/g_dashboard'))
		{
		$this->load->view('g_dashboard');
        }
        else{
           redirect('login');
        }
		
	}
	public function g_book()
	{
		if($this->session->userdata('Home/g_dashboard'))
		{
		$this->load->view('g_book');
        }
        else{
           redirect('login');
        }
		
	}
	public function g_crud()
	{
		if($this->session->userdata('Home/g_dashboard'))
		{
		$this->load->view('g_crud');
        }
        else{
           redirect('login');
        }
		
	}
	public function g_collect()
	{
		if($this->session->userdata('Home/g_dashboard'))
		{
		$this->load->view('g_collect');
        }
        else{
           redirect('login');
        }
		
	}
	public function g_myearning()
	{
		if($this->session->userdata('Home/g_dashboard'))
		{
		$this->load->view('g_myearning');
        }
        else{
           redirect('login');
        }
		
	}
	
	public function register()
	{
		$this->load->view('register');
		
	}
	public function register_upload()
	{
		
		$data['u_firstname'] =$this->input->post('u_firstname');
		$data['u_lastname'] =$this->input->post('u_lastname');
		$data['u_username'] =$this->input->post('u_username');
		$data['u_password'] =md5($this->input->post('password1'));
		$data['u_phonenumber'] =$this->input->post('u_phonenumber');
		$data['u_email'] =$this->input->post('u_email');
		$data['u_aadhar'] =$this->input->post('u_aadhar');
		$data1= $this->Register_model->insert($data);
		if($data1){
			$this->session->set_userdata('Home/login');
			$this->session->set_flashdata('error','Registration Successful');
			redirect('Home/login');
		}
		else{
			$this->session->set_flashdata('error','Registration Failed');
			redirect('Home/register');
		}
	}
	public function login_process()
	{
		$u_username =$this->input->post('u_username');
		$u_password =$this->input->post('u_password');
		$data=$this->Login_model->login_user($u_username,$u_password);
		$u_username=$data['u_username'];
		$u_role=$data['u_role'];
		$this->session->set_userdata('users', $data);
		if($u_role == 'Customer')
            {
                $this->session->set_userdata('Home/cust_dashboard', $data);
                redirect('Home/cust_dashboard');
            }
		else if($u_role == 'Garbage Collector')
            {
                $this->session->set_userdata('Home/g_dashboard', $data);
                redirect('Home/g_dashboard');
            }
		else
		{
			$this->session->set_flashdata('error','Invalid Username/Password');
			redirect('Home/login');
		}

	}
	public function logout(){
	
		$this->session->sess_destroy();
		redirect('Home/login');
	}
	public function cust_bookconfirm()
	{
		$c_data['c_name'] =$this->input->post('c_name');
		$c_data['c_phonenumber'] =$this->input->post('c_phonenumber');
		$c_data['c_email'] =$this->input->post('c_email');
		$c_data['c_wastetype'] =$this->input->post('c_wastetype');
		$c_data['c_wastename'] =$this->input->post('c_wastename');
		$c_data['c_wastedesc'] =$this->input->post('c_wastedesc');
		$c_data['c_picupload'] =$this->input->post('c_picupload');

		$insert = $this->Custbook_model->insert($c_data);;
		if($c_data1){
			$this->session->set_userdata('Home/cust_dashboard');
			$this->session->set_flashdata('error','Registration Successful');
			redirect('Home/cust_dashboard');
		}
		else{
			$this->session->set_flashdata('error','Registration Failed');
			redirect('Home/cust_dashboard');
		}
	}
}