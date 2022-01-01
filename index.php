<?php
    $command = escapeshellcmd('python3 /Hello.py');
    $output = shell_exec($command);
    echo $output;
 //	echo "wrong";
?>