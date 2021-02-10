<?php
$keys = array('test1', "test2",'test3');
$sub = $_GET["key"]; 
$no = "haha";
if (in_array($sub,$keys,TRUE)) {
echo ("Whitelisted");
}
else
{
Echo ("not whitelisted");
}
?>
