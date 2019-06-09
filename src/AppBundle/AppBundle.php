<?php

namespace AppBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use AppBundle\Lib\Globals;

class AppBundle extends Bundle
{
    public function boot()
    {
        // Set some static globals 
        Globals::setUploadDir($this->container->getParameter('product_upload_directory'));
    }
}
