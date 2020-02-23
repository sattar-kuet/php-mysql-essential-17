<?php
$a = 'outside';

function test(){
    global $a;
	$a = 'inside';
}

test();

echo $a;

?>