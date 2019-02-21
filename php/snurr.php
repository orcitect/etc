<?php

$str="abcdefghijklmnopqrstuvwxyz@AB%CDEFGHIJKLMNOPQRST!UVWXYZ0123456789@";

for ($i=0;$i<45+rand(0,10);$i++)
{
	echo $str[rand(0,strlen($str)-1)];
}

?>