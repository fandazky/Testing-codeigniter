<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Export extends CI_Controller {

	public function index() {
		$this->load->library('pdf');
		$data = array();
		$html = $this->load->view('export/bootstrap-pdf', $data, true);
        $mpdf = $this->pdf->initialize();
        $mpdf->WriteHTML(file_get_contents('./assets/css/bootstrap.css'), 1);
        $mpdf->writeHTML($html);
        $mpdf->output();
	}
}