<?php

function HelloWorld() {
	echo 'Hello World';
	return;
}

ob_start();
HelloWorld();
$Value = ob_get_clean();

echo $Value;
