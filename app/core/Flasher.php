<?php

class flasher
{

   public static function setflash($message)
   {
      $_SESSION['flash'] = $message;
   }

   public static function flash()
   {
      if (isset($_SESSION['flash'])) {
         echo $_SESSION['flash'];
         unset($_SESSION['flash']);
      }
   }
}
