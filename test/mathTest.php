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
        // echo($Resultat);
        // if ($Resultat != 2) {
        //     echo("la division devrait retourner deux");
        // }
        // echo("possible");
    }

    // function testDiviser()
    // {
    //     $math = new math();
    //     try {
    //        $math->division(10,0);
    //             $this->fail("ca aurait du planter");


    //     } catch (Exception $e) {
    //         $this->assertEquals($e, "une erreur","ya gar");
            
    //     }
    // }

}

?>