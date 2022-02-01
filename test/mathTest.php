<?php
require('src/math.php');
use PHPUnit\Framework\TestCase; 


    // "autoload": {
    //     "psr-4": {
    //         "Jordan\\Testphp\\": "src/"
    //     }
    // },

class mathTest extends TestCase
{
    function testDiviser1()
    {

        $math = new math();
        $Resultat= $math->division(10,5);
        $this->assertEquals(2,$Resultat);
     
    }

    
}

?>