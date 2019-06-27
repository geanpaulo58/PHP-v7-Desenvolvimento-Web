<?php

$bytes = file_put_contents('freud.txt', "Só o conhecimento traz poder!\n",
		LOCK_EX|FILE_APPEND);

echo "$bytes bytes escritos no arquivo.\n";
