<?php

class BaseController 
{
    
    private $pathViewDefault = './MVC/Views/Layout/DefaultLayout.php';
    private $pathViewLayout1 = './MVC/Views/Layout/Layout1.php';
    private $pathModel= './Models/';

    // lên view để xử lý
    protected function view($page)
    {   
        if($page=='Login') require $this->pathViewLayout1;
        else if($page=='Register') require $this->pathViewLayout1;
        else require $this->pathViewDefault;
    }
    // khai báo class Models
    protected function loadModel($path)
    {
        require $this->pathModel.$path;
    }
}


?>
