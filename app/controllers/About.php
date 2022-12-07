<?php

class About extends Controller
{
   public function index($name = 'luthfi', $job = 'PKL', $umur)
   {
      $this->view('about/index');
   }

   public function page()
   {
      $this->view('about/page');
   }
}
