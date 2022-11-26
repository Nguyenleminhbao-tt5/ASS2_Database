<?php

class ProfileProductController extends BaseController
{
    private $profileProduct;
    public function __construct()
    {
       // $this->loadModel('Homepage.php');
       // $this->homepage= new Homepage();
      
    }
    public function show()
    {
        $this->view($page='ProfileProduct');
    }

}


?>