<?php

    defined("BASEPATH") OR exit("Direct script access is not allowed!");

    class Kisakyamukama extends CI_Controller{

        public function  __construct(){
            parent::__construct();
            $this->load->model("kisakyamukamaModel", "data");
        }

        public function index(){
            $this->load->view('index');
        }

        // add user
        public function register(){
          $this->load->helper('security');
              $this->load->library('form_validation');
              $this->form_validation->set_rules('fname', 'First name', 'required|trim|min_length[4]|max_length[16]');
              $this->form_validation->set_rules('lname', 'Last name', 'required|trim|min_length[4]|max_length[16]');
              $this->form_validation->set_rules('uname', 'Username', 'trim|xss_clean|is_unique[users.username]|min_length[5]|max_length[15]',
               array('required' =>'You have not provided %s.', 'is_unique' => 'This %s already exists.') );
              $this->form_validation->set_message('is_unique', 'username already exists, try another one');//another way to set message for error
              $this->form_validation->set_rules('residence', 'Residence', 'required|trim|min_length[4]|max_length[18]');
              $this->form_validation->set_rules('contact', 'Zip', 'required|trim|min_length[3]|max_length[20]');
              $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
              $this->form_validation->set_rules('pwd', 'Password', 'required|trim');
              $this->form_validation->set_rules('cpwd', 'Confirm Password', 'required|trim|matches[pwd]');

              $fname = $this->input->post('fname');
              $lname = $this->input->post('lname');
              $username = $this->input->post('uname');
              $residence = $this->input->post('residence');
              $zip_code = $this->input->post('zip');
              $gender = $this->input->post('gender');
              $pwd = $this->input->post('pwd');



                  if($this->form_validation->run()){
                  $data = array(
                      'first_name'=>$fname,
                      'last_name' =>$lname,
                      'username'=>$username,
                      'residence'=>$residence,
                      'zip_code' =>$zip_code,
                      'gender'=>$gender,
                      'password'=>$pwd
                  );

                  $query = $this->insert('users', $data);
                  if($query) $data['form'] ="Data inserted successfully"; else $data['form'] ="Error in insering data into database";
                  $this->load->view('index', $data);

              }else{
                  $data['form'] = "Error encountered during field validation";
                  $this->load->view('index', $data);

              }


        }




      }

?>
