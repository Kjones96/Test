<html>
<body>
The results are
<?php
$var1 =  $_POST["num1"]; 
$var2 =  $_POST["num2"];
$oper1 =  $_POST["oper1"];
//echo $var1 + $var2 . $oper1;
switch ($oper1) {
    case "ADD":
        echo $var1 + $var2;
        break;
    case "MUL":
        echo $var1 * $var2;
        break;
    case "SUB":
        echo $var1 - $var2;
        break;
    case "Div":
	echo $var1 / $var2;
	break;
    case "0":
	 echo "Not Valid Input"
	 break;
    case "1":
	 echo "Not Valid Input"
	 break;
    default:
        echo "Doesnt work";
}
?>
</body>
</html>