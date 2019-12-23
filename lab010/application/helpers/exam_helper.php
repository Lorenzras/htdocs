<?php

function student_number($stud_no){
	return 'STUDENT'.str_pad($stud_no, 5, 0, STR_PAD_LEFT);
}

function rating($score, $no_of_items){
	return ( $score/ $no_of_items)*100;
}

?>