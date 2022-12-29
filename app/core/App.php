<?php

class App
{
   protected $controller = 'C_Index';
   protected $method = 'index';
   protected $params = [];

   public function __construct()
   {
      $url = $this->parseUrl();

      // cek controller
      if (file_exists("./app/controllers/C_" . ucfirst($url[0]) . ".php")) {
         $this->controller = 'C_' . ucfirst($url[0]);
         unset($url[0]);
      }

      require_once "./app/controllers/$this->controller.php";
      $this->controller = new $this->controller;


      // cek method
      if (isset($url[1])) {
         if (method_exists($this->controller, $url[1])) {
            $this->method = $url[1];
            unset($url[1]);
         }
      }


      // cek param
      if (!empty($url)) {
         $this->params = array_values($url);
      }

      // run controller,method, & param
      call_user_func_array([$this->controller, $this->method], $this->params);
   }

   public function parseUrl()
   {
      if (isset($_GET['url'])) {
         $url = rtrim($_GET['url'], '/');
         $url = filter_var($url, FILTER_SANITIZE_URL);
         $url = explode('/', $url);
         return $url;
      }
   }
}
