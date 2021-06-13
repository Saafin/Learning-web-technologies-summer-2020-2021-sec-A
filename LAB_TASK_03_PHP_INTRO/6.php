<?php
$student = array("abc", "def", "ghi",); 
$Name="def";
for($i=0;$i<=2;$i++)
{
    if($student[$i]==$Name)
{
    echo "$student[$i]";
}
else{
    echo "<br> Name not found <br>";
}
}
?>