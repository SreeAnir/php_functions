"a"=>"red","b"=>"green" <br />
+ <br />
"c"=>"blue","b"=>"yellow"<br />
<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
echo "array_merge";
echo '<br/>';
print_r(array_merge_recursive($a1,$a2));
echo "array_merge_recursive";
?>