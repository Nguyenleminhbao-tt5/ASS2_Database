<?php

class LoginController extends BaseController
{
    private $login;
    public function __construct()
    {
       // $this->loadModel('Homepage.php');
       // $this->homepage= new Homepage();
      
    }
    public function show()
    {
        $this->view($page='Login');
    }

}


?>