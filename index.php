<?php
    $command = escapeshellcmd(Python3 'Hello.py');
    $output = shell_exec($command);
    echo $output;
 //	echo "wrong";
?>