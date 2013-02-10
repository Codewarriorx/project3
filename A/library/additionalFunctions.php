<?php
	function activePage($page='home'){
		
		if($page == PAGE){
			return "active";
		}
	}

	/*
	*	This is to recreate lcfirst function that is available in newer versions of php
	*/
	// function lcfirst( $str ){
	// 	return (string)(strtolower(substr($str,0,1)).substr($str,1));
	// }
	// 
	// 
	function loggedIn(){
		if (!isset($_SESSION['user']) || !isset($_SESSION['access'])) { // not logged in
			return false;
		}
		return true;
	}	

	function checkAccess($access = array(0)){
		if (!in_array($_SESSION['access'],$which) == 1) { // not proper access
			return false;
		}
		return true;
	}



?>