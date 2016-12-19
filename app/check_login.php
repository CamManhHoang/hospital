<?php

session_start();
function check_login(){
	$check = array(
	    "check_user"=>$_SESSION["session_user"],
	    "check_pass"=>$_SESSION["session_password"],
	    "check_session"=> $_SESSION["session_user"],
	);
	return $check;
}

