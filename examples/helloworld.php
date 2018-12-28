<?php

$stdin = fopen("php://stdin","r");

print "This is a two-way Hello World application.\n";
print "Please enter your name: ";
$name = trim(fgets($stdin));
print "So,

	World: Hello $name!!
	$name: Hello World!!
	
Now you're friends.
";
