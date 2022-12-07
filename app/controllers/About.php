<?php

class About extends Controller
{
   public function index($name = 'luthfi')
   {
      $data['nama'] = $name;
      echo '<pre>';
      print_r($this->model('User_model')->getUser());
      die;
      $this->view('about/index', $data);
   }

   public function page()
   {
      $this->view('about/page');
   }
}
