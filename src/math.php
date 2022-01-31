<?php
class math
{
    function division($var1,$var2)
    {
    if($var2 ==0){
        throw new Exception("une erreur");
    }
    return $var1/$var2;
    }
}



?>