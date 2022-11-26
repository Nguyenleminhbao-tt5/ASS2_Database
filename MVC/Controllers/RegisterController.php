<?php

class RegisterController extends BaseController
{
    private $register;
    public function __construct()
    {
       // $this->loadModel('Homepage.php');
       // $this->homepage= new Homepage();
      
    }
    public function show()
    {
        $this->view($page='Register');
    }

}


?>