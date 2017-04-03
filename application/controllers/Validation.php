<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Validation extends CI_Controller {

	public function index() {
		$null_value = NULL;
		$empty_value = '';
		$false_value = FALSE;
		$emptyarray_value = array();
		if(!isset($null_value)) {
			echo "null_value not isset";			//TRUE
		}
		if(!isset($empty_value)) {
			echo "empty_value not isset";			//FALSE
		}
		if(!isset($false_value)) {
			echo "false_value not isset";			//FALSE
		}
		if(!isset($emptyarray_value)) {
			echo "emptyarray_value not isset";		//FALSE
		}
	}

	public function empty_check() {
		$null_value = NULL;
		$empty_value = '';
		$false_value = FALSE;
		$emptyarray_value = array();
		if(empty($null_value)) {
			echo "null_value is empty<br>";			//TRUE
		}
		if(empty($empty_value)) {
			echo "empty_value is empty<br>";		//TRUE
		}
		if(empty($false_value)) {
			echo "false_value is empty<br>";		//TRUE
		}
		if(empty($emptyarray_value)) {
			echo "emptyarray_value is empty<br>";	//TRUE
		}	
	}

	public function boolean_check() {
		$null_value = NULL;
		$empty_value = '';
		$false_value = FALSE;
		$emptyarray_value = array();
		if(!$null_value) {
			echo "null_value is false<br>";			//TRUE
		}
		if(!$empty_value) {
			echo "empty_value is false<br>";		//TRUE
		}
		if(!$false_value) {
			echo "false_value is false<br>";		//TRUE
		}
		if(!$emptyarray_value) {
			echo "emptyarray_value is false<br>";	//TRUE
		}	
	}
}