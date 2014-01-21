<?php
//PHP Simple Orochi Framework Array
//for simplifying code and making less calls, and to centralize many functions.


class html {

	function header() {}
	function body() {}
	function footer() {}
	function require_file ($file, $location) {}
	

}

class db {

	//
	function query() {}
	function query_trigger() {}
	function query_sort() {}
	function query_result_limit() {}
	function exec_query() {}
	function num_rows() {}
	function row_assoc() {}

}

class session {

	function create() {}
	function fetch() {}
	function set() {}
	function destroy() {}

}

class input_check {

	function strings() {}
	function numbers() {}
	function alphanum() {}
	function time() {} //checks if time is too early, too late, or if it is valid time
	function date() {} //checks if date is too early, too late, or if it is valid date
	function datetime() {} //checks if date and time is too early, too late, or if it is valid
	function in_list($string, $array) {} //checks if the string matches any entries that are in the array

}

class forms {

	function text_input() {}
	function radio_input() {}
	function checkbox() {}
	function buttons() {} //type: submit, reset, 

}


function salting($string) {
	//Salting involves subject, 
	return md5();
}



?>