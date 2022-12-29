<?php

function redirect($url, $statusCode = 303)
{
   header('location: ' . $url, true, $statusCode);
   die();
}

function baseurl($url = '')
{
   return BASEURL . $url;
}
