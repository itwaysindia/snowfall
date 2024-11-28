<?php

date_default_timezone_set('Asia/Kolkata');

define('ENVIRONMENT', 'development'); // Options: 'development', 'production'

     require_once('constant.php');
     require_once(DOCROOT.'/logger.php');
     require_once(DOCROOT."/db.php");
     require_once('classes.php');
     require_once(DOCROOT.'/classes/itways.php');


          $itways = new itways();
          
          $getuserdata = $itways->userdata();


?>
