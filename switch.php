<?php
$jour=rand(1,3);
/*switch ($jour) {
    case 1:
        echo "1";
        break;
    case 2:
        echo "2";
        break;
    case 3:
        echo "3";
        break;
    default:
        "erreur";
        break;
};
*/
$var= match ($jour) {
    1 =>  "1", 
    2 => "2" ,
    default => "erreur"
};
echo $var;