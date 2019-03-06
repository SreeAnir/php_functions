
<!DOCTYPE html>
<html>
<body>
The array_intersect() function compares the values of two (or more) arrays, and returns the matches.

This function compares the values of two or more arrays,
 and return an array that contains the entries from array1 
 that are present in array2, array3, etc.
 <br />
 $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
 <br />
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("e"=>"red");

<br />
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("e"=>"red");

$result=array_intersect($a1,$a2,$a3);
print_r($result);
?>
<br>
array_intersect_assoc ,
Compare the keys and values of two arrays, and return the matches:<br />


<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c1"=>"blue");
$a2=array("a"=>"red","b1"=>"green","cs1"=>"blue");

print_r($a1) ; echo '<br />';
print_r($a2); echo  '<br />';
$result=array_intersect_assoc($a1,$a2);
print_r($result); echo  '<br />';
?>
<br>
array_intersect_key ,
Compare the keys of two arrays, and return the matches:

<br />


<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","b"=>"green","c1"=>"blue");
$a2=array("a"=>"red","b"=>"green","cs1"=>"blue");

print_r($a1) ; echo '<br />';
print_r($a2); echo  '<br />';
$result=array_intersect_key($a1,$a2);
print_r($result); echo  '<br />';
?>

</body>
</html>