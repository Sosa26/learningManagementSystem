<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main extends CI_Controller {
   public fUnction index(){
      
      $this->load->view("Moderator_add");
   }

   public function form_validation(){
      //echo 'OK';
      $this->load->library('form_validation');
      $this->form_validation->set_rules("first_name", "First Name", 'required|alpha');
      $this->form_validation->set_rules("last_name", "Last Name", 'required|alpha');
      $this->form_validation->set_rules("email", "email", 'required');
      $this->form_validation->set_rules("password", "password", 'required');

      if($this->form_validation->run()){
         //true
         $this->load->model("main_model");
         $data = array(
            "first_name" => $this->input->post("first_name"),
            "last_name" => $this->input->post("last_name"),
            "email" => $this->input->post("email"),
            "password" => $this->input->post("password"),
            "social_links" => $this->input->post("social_links"),
            "date_added" => $this->input->post("date_added"),
            "last_modified" => $this->input->post("last_modified"),
            "watch_history" => $this->input->post("watch_history"),
            "wishlist" => $this->input->post("wishlist"),
            "title" => $this->input->post("title"),
            "paypal_keys" => $this->input->post("paypal_keys"),
            "stripe_keys" => $this->input->post("stripe_keys"),
            "varification_code" => $this->input->post("varification_code"),
            "status" => $this->input->post("status"),
            "identificationNo" => $this->input->post("identificationNo"),
            "CV" => $this->input->post("CV"),
            "qualification" => $this->input->post("qualification")
         );

         $this->main_model->insert_data($data);

         redirect(base_url() . "main/inserted");
      }
      else{
         //false
         $this->index();
      }
   }

   public function inserted(){
      $this->index();
   }

   //form validation library
}
