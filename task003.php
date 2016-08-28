<?php


$arr = array('mleko',.','. 'hleb', 'voda','mleko', 'voda', 'mleko', 'hleb');

$rez = array_count_values($arr);
asort($rez);
end($rez);
$kon = key($rez);

echo $kon;
