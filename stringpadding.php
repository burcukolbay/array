<?php
echo "<pre>"; //enables viewing of the spaces
$h='House';
printf("[%s]\n",$h); //standard string output
printf("[%10s]\n",$h); //right justify with spaces
printf("[%-10s]\n",$h); //left justify with spaces
printf("[%010s]\n",$h); //zero padding
printf("[%'#10s]\n",$h); //use the custom padding character #
$d='Doctor House';
printf("[%10.8s]\n",$d); //right justify, cutoff of 8 characters
printf("[%-10.6s]\n",$d); //left justify, cutoff of 6 characters
printf("[%-'@10.6s]\n",$d); //left justify, pad '@' cutoff 6 chars


?>

