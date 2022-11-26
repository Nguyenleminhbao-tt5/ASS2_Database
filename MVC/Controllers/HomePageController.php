<?php

class HomePageController extends BaseController
{
    private $homepage;
    public function __construct()
    {
       // $this->loadModel('Homepage.php');
       // $this->homepage= new Homepage();
      
    }
    public function show()
    {
        $this->view($page='HomePage');
    }

}


?>