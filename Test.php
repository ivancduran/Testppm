<?php

namespace Testppm;

use Phalcon\Mvc\User\Component;

class Test extends Component
{
    public function test($test=null){
        return $test.'_Mod';
    }
    
}
