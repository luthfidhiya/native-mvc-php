<?php

class C_About extends Controller
{

   public function __construct()
   {
      $this->about = $this->model('M_about');
   }

   public function index($name = 'luthfi')
   {
      $data['nama'] = $name;
      $data['user'] = $this->about->getUser();
      $this->view('About/V_Index', $data);
   }

   public function page()
   {

      $this->view('About/V_Page');
   }
}
