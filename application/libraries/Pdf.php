<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

include_once APPPATH.'/third_party/mpdf/mpdf.php';

class Pdf {

	public function __construct() {
	    log_message('Debug', 'mPDF class is loaded.');
	}

	public function initialize($param= '"en-GB-x","A4","","",10,10,10,10,3,3') {
        return new mPDF($param);
    }

}