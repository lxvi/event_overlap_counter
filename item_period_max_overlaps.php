<?php

define( 'esc', chr(27));

$buffer = array();
$old = 0 ;
$max = 0 ;
$count = 200000000 ;

while( $line = fgetcsv( STDIN ) and $count-- ){
	$buffer[] = $line ;
	// print str_pad(sizeof( $buffer ),4,' ',STR_PAD_LEFT).' '.$buffer[0][9].'  '.$line[7]."\n" ;
	while( $buffer && $buffer[0][9] < $line[7] ){
		$toss = array_shift( $buffer );
		// print "tossing $toss[9]\n";
	}
	$old = $max ;
	$max = max( $max, sizeof( $buffer ));
	print $max <> $old ? esc."[93m"."$max (#$line[0]) ".esc."[0m" : sizeof( $buffer ).' ' ;
}
print "\n".esc."[93m max is $max".esc."[0m\n";
