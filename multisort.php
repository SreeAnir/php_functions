<?php
$a=array("Dog","Cat","Horse","Bear","Zebra");
array_multisort($a);
print_r($a);
?>
<br />
<?php
$a1=array("Dog","Cat","sss","aodfog");
$a2=array("Fido","Missy","3434734","p");
array_multisort($a1,$a2);
print_r($a1);
print_r($a2);
?>