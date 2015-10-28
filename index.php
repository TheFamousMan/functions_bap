<?php


include 'functions.php';

writeHello();

writeMsg('hello');
writeMsg('byebye');

writeMsgTo('Natan','Functions are cool');
writeMsgTo('Natan');

$outcome = addValue(5,7);
echo 'The outcome of 5 + 7 = '. $outcome . '<br/>';

$outcome = calcRect(5, 7);
echo 'The area of a rectangle of 5 and 7 = '. $outcome . '<br/>';

?>