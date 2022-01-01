<?php
    $command = escapeshellcmd('Hello.py');
    $output = shell_exec($command);
    echo $output;
 //	echo "wrong";
?>