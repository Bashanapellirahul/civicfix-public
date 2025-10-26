<?php

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ClStudentExampleBundle extends Bundle{

    public function getConfig(){
        return (array) include dirname(__FILE__).'/config/bundle.settings.php';
    }

    public  function getAutoLoaderCofig()
    {
        return[
            'namespace'=>[
                'StudentExampleBundle\\'=> dirname(__FILE__).'/src'
                ]
        ];

    }

}
