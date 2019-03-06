<?php
function myfunction($a,$b)
{
    echo "checking $a===$b";
    echo "<br />";
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c1"=>"blue");
$a2=array("a"=>"red","b"=>"green","e2"=>"blue");
$a3=array("a"=>"red","b"=>"1green");

$result=array_intersect_uassoc($a1,$a2,$a3,"myfunction");
print_r($result);


?>
<br />
array_intersect_ukey <br />
<?php
function myfunction1($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"blue","b"=>"black","e"=>"blue");

$result=array_intersect_ukey($a1,$a2,"myfunction1");
print_r($result);
?>